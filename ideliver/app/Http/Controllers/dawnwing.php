<?php

namespace App\Http\Controllers;

use App\Models\Dawnwing_quote;
use App\Models\Dawnwing_token;
use Illuminate\Http\Request;

use App\Http\Controllers\Skynet;

class dawnwing extends Controller
{
    public function CallPost($type,$uri,$params){



        $tokens = Dawnwing_token::where('valid',1)->get();


         $token = $tokens[0]->d_token;

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
                'Authorization: Bearer '.$token.''
            ),
        ));

        $response = json_decode(curl_exec($curl));

        curl_close($curl);

        return $response;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // return view('parcels.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('quotes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $body = [
            "receiverSite"=> "",
            "receiverProvince"=> $request->receiver_order_province,
            "senderUnit"=> "",
            "senderStreet"=> $request->billing_order_address_1,
            "senderSite"=>$request->billing_order_address_2,
            "senderProvince"=> $request->billing_order_provence,
            "senderSuburb"=> $request->billing_order_suburb,
            "senderCity"=> $request->billing_order_city,
            "senderPostCode"=> $request->billing_order_postcode,
            "senderContact"=> $request->sender_name,
            "sender"=> $request->sender_name,
            "senderCell"=> $request->sender_phone,
            "senderTel"=> $request->sender_phone,
            "senderEmail"=> $request->sender_email,
            "timeReady"=> "08:00:00",
            "timeClosed"=> "17:00:00",
            "receiverEmail"=> $request->receiver_email,
            "receiverTel"=> $request->receiver_phone,
            "accountName"=> "TESTING",
            "accountNo"=> "TESTING",
            "collectionDate"=> "2022-06-20T17:12:59.055894+02:00",
            "parcels"=> json_decode(base64_decode($request->items)),
            "surcharges"=> [
                [
                    "code"=> "03"
                ],
                [
                    "code"=> "36"
                ]
            ],
            "mass"=> 10,
            "service"=> "ONX",
            "insuranceRequired"=> "false",
            "insuranceValue"=> 0,
            "cod"=> 0,
            "deliveryType"=> "D/D",
            "invoiceValue"=> 0,
            "receiverUnit"=> "1",
            "receiverStreet"=> $request->receiver_order_address_1,
            "receiverSuburb"=> $request->receiver_order_suburb,
            "receiverCity"=> $request->receiver_order_city,
            "receiverPostCode"=> $request->receiver_order_postcode,
            "receiverContact"=> "Receiver Contact",
            "receiver"=> $request->receiver_name,
            "receiverCell"=> $request->receiver_phone
        ];


        $dataQuote =  $this->CallPost('POST','/dwwebservices/v2/uat/api/Quotes/GetQuotes',$body);

        $quote = new Dawnwing_quote();
        foreach ($dataQuote->response->data as $order){

            $trans = CommonModel::createTransactionId();
            $quote->orderNumber = $trans;
            $quote->quoteNo = $order->quoteNo;
            $quote->customerRef = '';
            $quote->successful = $order->successful;
            $quote->account = ''.$order->account.'';
            $quote->rate = ''.$order->rate.'';
            $quote->service = $order->service;
            $quote->chargeableMass = $order->chargeableMass;
            $quote->vat = $order->vat;
            $quote->total = $order->total;
           // $quote->discountValue = $order->discountValue;
            $quote->deliveryCharge = $order->deliveryCharge;
            $quote->freightValue = $order->freightValue;
            $quote->totalVolume = $order->totalVolume;
            $quote->apiErrors =''. $order->apiErrors.'';
            $quote->charges = json_encode($order->charges);
            $quote->insurance = $order->insurance;
            $quote->originAreaType = $order->originAreaType;
            $quote->destinationAreaType = $order->destinationAreaType;
            $quote->earliestCollectionDate = $order->earliestCollectionDate;
            $quote->earliestCollectionTime = $order->earliestCollectionTime;
            $quote->latestDeliveryDate = $order->latestDeliveryDate;
            $quote->latestDeliveryTime = $order->latestDeliveryTime;
            $quote->accountNo = $order->accountNo;
            $quote->post_data = json_encode($body);
            $quote->otherCharge = $order->otherCharge;
            $quote->save();

            $response[]  = [
                'order'=>$trans,
                'quoteNo'=>$order->quoteNo,
                'total'=>$order->total,
                'vat'=>$order->total,
                'freightValue'=>$order->freightValue,
                'originAreaType'=>$order->originAreaType,
                'destinationAreaType'=>$order->destinationAreaType,
        ];
        }

        //Skynet//
        $Skynet = new Skynet();

        $quote = $Skynet->GetQuote($request);



        return view('quotes.summary',compact('response'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
