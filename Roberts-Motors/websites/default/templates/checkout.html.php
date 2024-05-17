<?php

$pdo = new PDO('mysql:dbname=roberts_motors;host=mysql', 'student', 'student');
require_once 'stripe-php-14.7.0/init.php';
require_once 'config.php';

$stripe = new \Stripe\StripeClient(STRIPE_KEY);

$CItems = findAll($pdo, 'cart');

//prepare shopping cart for payment using stripe
$lineItems = [];
    foreach ($CItems as $cart){
$lineItems[] = [
        'price_data' => [
            'currency' => 'gbp',
            'product_data' => [
                'name' => $cart['product_name'],
            ],
            'unit_amount' => $cart['price'] * 100,
        ],
        'quantity' => 1
];
    }

//create stripe checkout session
$checkout = $stripe->checkout->sessions->create([
    'line_items' => $lineItems,
    'mode' => 'payment',
    'success_url' => 'https://v.je/success.php',
    'cancel_url' => 'https://v.je/shoppingcart.php'

]);


//send the user to stripe
header('Content-Type: application/json');
header("HTTP/1.1 303 See Other");
header("Location: " . $checkout->url);
exit;

?>