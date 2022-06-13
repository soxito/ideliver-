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
  "waybillNo"=> "IITT0154275",
  "sendAccNo"=> "TESTING",
  "sendSite"=> "TEST01",
  "sendCompany"=> "Peter",
  "sendAdd1"=> "",
  "sendAdd2"=> "190 andre greyvenstein",
  "sendAdd3"=> "KWAXUMA",
  "sendAdd4"=> "KWAXUMA",
  "sendAdd5"=> "1868",
  "sendAdd6"=> "",
  "sendAdd7"=> "",
  "sendLongitude"=> "-12.567890",
  "sendLatitude"=> "23.907777",
  "sendW3w"=> "///test.test.test",
  "sendContactPerson"=> "Paul",
  "sendHomeTel"=> "1234567890",
  "sendWorkTel"=> "0987654321",
  "sendCell"=> "0987654321",
  "recCompany"=> "TEST",
  "recEmailAddress"=> "client@mail.co.za",
  "recAdd1"=> "",
  "recAdd2"=> "111 Zone 8",
  "recAdd3"=> "PRETORIA",
  "recAdd4"=> "PRETORIA",
  "recAdd5"=> "0002",
  "recAdd6"=> "12",
  "recAdd7"=> "Houston Estate",
  "recLongitude"=> "-12.9000000",
  "recLatitude"=> "0.00000000",
  "recW3w"=> "///this.port.test",
  "recContactPerson"=> "Contact Person",
  "recHomeTel"=> "",
  "recWorkTel"=> "01123456789",
  "recCell"=> "0821234567",
  "specialInstructions"=> null,
  "serviceType"=> "ONX",
  "totQTY"=> 1,
  "totMass"=> 1,
  "insurance"=> 'false',
  "insuranceValue"=> 0,
  "customerRef"=> "12345",
  "storeCode"=> "JSON",
  "securityStamp"=> null,
  "requiredDocs"=> [],
  "waybillInstructions"=> [],
  "instructionCode"=> "",
  "isSecureDelivery"=> 'false',
  "verificationNumbers"=> null,
  "generateSecurePin"=> 'false',
  "collectionNo"=> null,
  "invoiceRef"=> null,
  "parcels"=> [
    [
      "waybillNo"=> "IITT0154275",
      "length"=> 1,
      "height"=> 1,
      "width"=> 1,
      "mass"=> 1,
      "parcelDescription"=> "TEST PARCELS",
      "parcelNo"=> "waybill-test_01",
      "parcelCount"=> 1
    ],
    [
      "waybillNo"=> "IITT0154275",
      "length"=> 1,
      "height"=> 1,
      "width"=> 1,
      "mass"=> 1,
      "parcelDescription"=> "TEST PARCELS",
      "parcelNo"=> "waybill-test_02",
      "parcelCount"=> 2
    ],
    [
      "waybillNo"=> "IITT0154275",
      "length"=> 1,
      "height"=> 1,
      "width"=> 1,
      "mass"=> 1,
      "parcelDescription"=> "TEST PARCELS",
      "parcelNo"=> "waybill-test_03",
      "parcelCount"=> 3
    ]
  ],
  "documents"=> null,
  "completeWaybillAfterSave"=> 'true'
];

$response = $client->request('POST', '/ideliver/api/waybill/dawnwing', ['form_params' => $body]);

$token = ($response->getBody());

echo '<pre>';
print_r(json_decode($token));
echo(($token));
