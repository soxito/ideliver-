<?php
require __DIR__ . '/../vendor/autoload.php';


use GuzzleHttp\Client;

$database = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=ideliver', 'root', ''); // the same arguments as uses PDO

$client = new Client([
    'base_uri' => 'http://localhost',

]);

$stream = [
    'FromCity'=>'KWAXUMA',
    'FromCityPostalCode'=>'1868',
    'ToCity'=>'PRETORIA',
    'ToCityPostalCode'=>'0002',
    'ServiceType'=>'[ON1]',
    'InsuranceType'=>'1',
    'InsuranceAmount'=>'0',
    'DestinationPCode'=>'0002',
    'ParcelList'=>[[
        'parcel_number'=>1,
        'parcel_length'=>12,
        'parcel_breadth'=>15,
        'parcel_height'=>33,
        'parcel_mass'=>2,
        'parcel_reference'=>'',
        'parcel_description'=>'',
    ]],
];

$response = $client->request('POST', '/ideliver/api/GetQuote/skynet', ['form_params' => $stream]);

$securityCode = json_decode($response->getBody());



echo ($response->getBody());