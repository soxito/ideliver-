<?php

use GuzzleHttp\Client;

class Common_Model
{

    public function createTransactionId()
    {

        $database = $this->dbConfig();

        $orderNumber = $database->query('SELECT orderNumber FROM dawnwing_quote');

        $key = "000000001";

        foreach ($orderNumber as $row)
        {
            $key = $row->orderNumber+1;
            $key = str_pad($key, 8, '0', STR_PAD_LEFT );
        }
        return $key;

    }

    protected function dbConfig(){

        $database = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=ideliver', 'root', ''); // the same arguments as uses PDO

        return $database;

    }

    public function skynetCallPost($type,$uri,$params){

        $client = new Client([
            'base_uri' => 'https://test.skynet.co.za:3227',

        ]);

        $database = $this->dbConfig();

        $result = $database->query('SELECT s_token FROM skynet_token WHERE', ['valid' => 1]);

        foreach ($result as $token){

        }

        $params['SecurityToken']=$token->s_token;
        $params['AccountNumber']='J99133';

        $response = $client->request($type, $uri, ['form_params' => $params]);

        $response = json_decode($response->getBody());

        return ($response);

    }

    protected function skynetToken(){

        $client = new Client([
            'base_uri' => 'https://test.skynet.co.za:3227',

        ]);

        $stream = [
            'Username'=>'iDeliverTest',
            'Password'=>'!D3liver1!',
            'SystemId'=>'2',
            'AccountNumber'=>'J99133',
        ];

        $response = $client->request('POST', '/api/Security/GetSecurityToken', ['form_params' => $stream]);

        $securityCode = json_decode($response->getBody());

        return $securityCode->SecurityToken;

    }
    public function token(){

        $token = $this->skynetToken();

        $database = $this->dbConfig();

        $data = ["s_token" => $token];

        $database->query('INSERT INTO skynet_token ?', [
            's_token' => $token,
            'valid' => 1,
        ]);

        return  json_encode([
            'id'=>$database->getInsertId(),
            'token'=>$token,
        ]);
    }
}