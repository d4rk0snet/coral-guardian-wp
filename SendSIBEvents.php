<?php
include('vendor/autoload.php');

$sendInBlueService = new \D4rk0snet\CoralAdoption\Service\SendInBlueService();
$paymentData = [
    'order_type' => 'adoption',
    'type' => 'coral',
    'price' => 20,
    'quantity' => 1,
    'payment_type' => 'credit_card',
    'lang' => 'fr'
];

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