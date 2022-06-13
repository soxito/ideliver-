<?php
require __DIR__ . '/../vendor/autoload.php';


use GuzzleHttp\Client;


$client = new Client([
    'base_uri' => 'http://localhost',

]);
$headers = [
    'Content-Type' => 'application/json'
];
$body = [
  "receiverSite"=> "",
  "receiverProvince"=> "Gauteng",
  "senderUnit"=> "",
  "senderStreet"=> "107 Andre Greyvenstein",
  "senderSite"=> "",
  "senderProvince"=> "Gauteng",
  "senderSuburb"=> "KWAXUMA",
  "senderCity"=> "KWAXUMA",
  "senderPostCode"=> "1868",
  "senderContact"=> "Paul",
  "sender"=> "Dawnwnig",
  "senderCell"=> "0871234567",
  "senderTel"=> "000000000",
  "senderEmail"=> "receiver@mail.co.za",
  "timeReady"=> "08:00:00",
  "timeClosed"=> "17:00:00",
  "receiverEmail"=> "me@mail.co.za",
  "receiverTel"=> "0987654321",
  "accountName"=> "TESTING",
  "accountNo"=> "TESTING",
  "collectionDate"=> "2022-06-20T17:12:59.055894+02:00",
  "parcels"=> [
    [
      "mass"=> 1,
      "length"=> 10,
      "breadth"=> 10,
      "height"=> 10,
      "units"=> 1
    ],
      [
          "mass"=> 0,
          "length"=> 10,
          "breadth"=> 10,
          "height"=> 10,
          "units"=> 1
      ]
  ],
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
  "receiverStreet"=> "12 State street",
  "receiverSuburb"=> "PRETORIA",
  "receiverCity"=> "PRETORIA",
  "receiverPostCode"=> "0002",
  "receiverContact"=> "Receiver Contact",
  "receiver"=> "Peter",
  "receiverCell"=> "0831234567"
];

$response = $client->request('POST', '/ideliver/api/GetQuote/dawnwing', ['form_params' => $body]);

$token = ($response->getBody());

echo '<pre>';
print_r(json_decode($token));
echo(($token));
