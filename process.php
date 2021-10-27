<?php
require 'vendor/autoload.php';

// $stripe = new \Stripe\StripeClient("sk_test_51HhycsD5pdCP2ysK4D1w2P1HTO3fxSYJTGxTU7gK88n7Yi3DYKXDAfwg9eLTkHz4auN9xqIOAQjGFd69sPJGRSyx00L0Y6Rr1E");
$stripe = new \Stripe\StripeClient("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");
$token = $_POST['token'];
$amount = $_POST['price'];
$phone = $_POST['phone'];
$name =$_POST['name'];
$currency = $_POST['currency'];
$stripe->charges->create([
  "amount" => $amount,
  "currency" => $currency,
  "source" => $token, // obtained with Stripe.js
  "metadata" => [
    "Holder Name"=>$name,
    "Customer phone" =>$phone, 
    ]
]);

var_dump($phone);


