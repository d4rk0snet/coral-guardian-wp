<?php
include('vendor/autoload.php');

$sendInBlueService = new \D4rk0snet\CoralAdoption\Service\SendInBlueService();
$paymentData = [
    'data' => [
        'order_type' => 'adoption',
        'type' => 'coral',
        'price' => 20,
        'quantity' => 1,
        'payment_type' => 'credit_card',
        'lang' => 'fr'
    ]
];

/*$paymentData = [
    'id' => 'cart:1234',
    'data' => [
        'revenue' => '2',
        'total' => 280,
        'currency' => 'EUR',
        'url' => 'www.sendinblue.com',
        'items' => [
            0 => [
                'name' => 'Coffret',
                'price' => '90.80',
                'id' => 1,
                'url' => 'www.example.com/coffret',
                'image' => 'www.example.com/coffret.jpg',
            ],
            1 => [
                'name' => 'Produit',
                'price' => '100.80',
                'id' => 2,
                'url' => 'www.example.com/produit1',
                'image' => 'www.example.com/produit.jpg',
            ],
        ],
    ]
];*/

$orderProcessingEvent = [];

//$sendInBlueService::sendOrderProcessingEvent("collin.gregory@gmail.com", [], $orderProcessingEvent);
$result = $sendInBlueService::sendPaymentEvent(true, "collin.gregory@gmail.com", ['lang' => 'fr'], $paymentData);
/*$result = $sendInBlueService::identifyContact("collin.test@gmail.com", [
    'nom' => 'collin',
    'prenom' => 'grégory',
    'adresse' => '4 passage saint andré',
    'code_postal' => '53260',
    'ville' => 'Entrammes',
    'pays' => 'France',
    'langue' => 'fr'
]);*/