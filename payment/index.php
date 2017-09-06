<?php

$ch = curl_init();

//curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:2753fa0ebe2d4e4718661da6f6237153",
                  "X-Auth-Token:963c1e855f7eb256ab8d9d3771f30e8e"));
$payload = Array(
    'purpose' => 'FIFA 16',
    'amount' => '2500',
    'phone' => '9999999999',
    'buyer_name' => 'vasim walikar',
    'redirect_url' => 'http://questerra.co/success.php',
    'send_email' => true,
    'webhook' => '',
    'send_sms' => true,
    'email' => 'test.developer.vasim@gmail.com',
    'allow_repeated_payments' => false
);
$response = curl_exec($ch);
curl_close($ch); 

echo $response;

$json_decode = json_decode($response ,true);

print_r($json_decode);

$long_url = $json_decode['payment_request']['longurl'];

echo $long_url;

?>