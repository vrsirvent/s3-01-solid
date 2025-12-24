<?php

require_once 'classes/GatewayPay.php';
require_once 'classes/StripePaymentGateway.php';
require_once 'classes/PaypalPaymentGateway.php';
require_once 'classes/BankTransfer.php';
require_once 'classes/PaymentProcessor.php';

$payments = [
    "Pay, the Stripe system:" => [new StripePaymentGateway(), 256.35],
    "Pay, Bank Transfer system:" => [new BankTransfer(), 301.01],
    "Pay, the PayPal system:" => [new PayPalPaymentGateway(), 841.75],
];

echo "\nPayments system:\n\n";
foreach ($payments as $textMessage => [$gateway, $amount]) {
    echo $textMessage . " ";
    $processor = new PaymentProcessor($gateway);
    echo $processor->processPayment($amount) . "\n\n";
}


