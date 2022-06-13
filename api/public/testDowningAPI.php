<?php
require __DIR__ . '/../vendor/autoload.php';


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://swatws.dawnwing.co.za/dwwebservices/v2/uat/api/Quotes/GetQuotes',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "receiverSite": "",
    "receiverProvince": "Gauteng",
    "senderUnit": "",
    "senderStreet": "107 Andre Greyvenstein",
    "senderSite": "",
    "senderProvince": "Gauteng",
    "senderSuburb": "JNB",
    "senderCity": "Johannesburg",
    "senderPostCode": "1619",
    "senderContact": "Paul",
    "sender": "Dawnwnig",
    "senderCell": "0871234567",
    "senderTel": "000000000",
    "senderEmail": "receiver@mail.co.za",
    "timeReady": "08:00:00",
    "timeClosed": "17:00:00",
    "receiverEmail": "me@mail.co.za",
    "receiverTel": "0987654321",
    "accountName": "TESTING",
    "accountNo": "TESTING",
    "collectionDate": "2022-06-10T17:12:59.055894+02:00",
    "parcels": [
        {
            "mass": 10,
            "length": 10,
            "breadth": 10,
            "height": 10,
            "units": 1
        }
    ],
    "surcharges": [
        {
            "code": "03"
        },
        {
            "code": "36"
        }
    ],
    "mass": 10,
    "service": "ONX",
    "insuranceRequired": false,
    "insuranceValue": 0,
    "cod": 0,
    "deliveryType": "D/D",
    "invoiceValue": 0,
    "receiverUnit": "1",
    "receiverStreet": "12 State street",
    "receiverSuburb": "Edenvale",
    "receiverCity": "Johannesburg",
    "receiverPostCode": "2009",
    "receiverContact": "Receiver Contact",
    "receiver": "Peter",
    "receiverCell": "0831234567"
}',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'Authorization: Bearer eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJJZCI6IjEiLCJleHAiOjE2NTcyOTI3NDUsImlzcyI6Imh0dHA6Ly80MS4wLjY5LjE5Ny8iLCJhdWQiOiJodHRwOi8vNDEuMC42OS4xOTcvIn0.HD2ZEaBZDhjUmLs7L41blU1GpGVCZO2B56fkav5rRGcgRziaSsQ59_sr7jC78fGiXy5i_DoHAEAYuOlcQv7pmA'
    ),
));

$response = json_decode(curl_exec($curl));

curl_close($curl);
print_r( $response->response->data);
