<?php
include __DIR__. '/vendor/autoload.php';
use \GuzzleHttp\Client;
$client = new Client();
$response = $client->get('https://ithillel.ua/ua');
echo $response->getBody()->getContents();