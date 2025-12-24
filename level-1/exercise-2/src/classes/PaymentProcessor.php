<?php

class PaymentProcessor
{
    protected GatewayPay $gateway;

    public function __construct(GatewayPay $gateway) {
        $this->gateway = $gateway;
    }

    public function processPayment(float $amount): string {
        return $this->gateway->sendPayment($amount);
    }
}
