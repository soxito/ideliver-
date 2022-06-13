<?php

use GuzzleHttp\Client;

class dawnwing extends Common_Model
{
protected function d_token(){

    $client = new Client(['base_uri' => 'http://swatws.dawnwing.co.za']);

    $headers = [
        'Content-Type' => 'application/json'
    ];
    $body = [
        "userName"=> "username",
        "password"=> "password"
    ];

    $response = $client->request('POST', '/dwwebservices/v2/uat/api/token', ['json' => $body],$headers);

    $token = json_decode($response->getBody());

    return $token->token;
}

private function CallPost($type,$uri,$params){



        $database = $this->dbConfig();

    $result = $database->query('SELECT d_token FROM dawnwing_token WHERE', ['valid' => 1]);

    foreach ($result as $token){

    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://swatws.dawnwing.co.za'.$uri.'',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $type,
        CURLOPT_POSTFIELDS =>json_encode($params),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$token->d_token.''
        ),
    ));

    $response = json_decode(curl_exec($curl));

    curl_close($curl);

    return $response;

    }

public function token(){

    $token = $this->d_token();

    $database = $this->dbConfig();

    $database->query('INSERT INTO dawnwing_token ?', [
        'd_token' => $token,
        'valid' => 1,
    ]);

    return  json_encode([
        'id'=>$database->getInsertId(),
        'token'=>$token,
    ]);

}

public function getQuote($data){

    $database = $this->dbConfig();

    $dataQuote = $this->CallPost('POST','/dwwebservices/v2/uat/api/Quotes/GetQuotes',$data);

    $insert = [];

    foreach ($dataQuote->response->data as $order){

        $insert[] = [
           'orderNumber'=>$this->createTransactionId(),
           'quoteNo'=>$order->quoteNo,
           'customerRef'=>$order->customerRef,
           'successful'=>$order->successful,
           'account'=>$order->account,
           'rate'=>$order->rate,
           'service'=>$order->service,
           'chargeableMass'=>$order->chargeableMass,
           'vat'=>$order->vat,
           'total'=>$order->total,
           'discountValue'=>$order->discountValue,
           'deliveryCharge'=>$order->deliveryCharge,
           'freightValue'=>$order->freightValue,
           'totalVolume'=>$order->totalVolume,
           'apiErrors'=>$order->apiErrors,
           'charges'=>json_encode($order->charges),
           'insurance'=>$order->insurance,
           'originAreaType'=>$order->originAreaType,
           'destinationAreaType'=>$order->destinationAreaType,
           'earliestCollectionDate'=>$order->earliestCollectionDate,
           'earliestCollectionTime'=>$order->earliestCollectionTime,
           'latestDeliveryDate'=>$order->latestDeliveryDate,
           'latestDeliveryTime'=>$order->latestDeliveryTime,
           'accountNo'=>$order->accountNo,
           'otherCharge'=>$order->otherCharge,
        ];

    }

      $database->query('INSERT INTO dawnwing_quote ?', $insert);


    return json_encode($insert);

}
public function getWaybill($data){

    $database = $this->dbConfig();

    $dataQuote = $this->CallPost('POST','/dwwebservices/v2/uat/api/waybill',$data);

    $insert = [];

    foreach ($dataQuote as $order){

        $insert[] = [
           'waybillNo'=>$data['waybillNo'],
           'waybillNo'=>$data['waybillNo'],
        ];

    }

      //$database->query('INSERT INTO dawnwing_quote ?', $insert);


    return json_encode($dataQuote);

}

}