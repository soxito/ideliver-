<?php
require __DIR__ . '/../vendor/autoload.php';


use GuzzleHttp\Client;

$database = new Nette\Database\Connection('mysql:host=127.0.0.1;dbname=ideliver', 'root', ''); // the same arguments as uses PDO

$result = $database->query('SELECT d_token FROM dawnwing_token WHERE', ['valid' => 1]);

foreach ($result as $token){

}

print_r($token->d_token);