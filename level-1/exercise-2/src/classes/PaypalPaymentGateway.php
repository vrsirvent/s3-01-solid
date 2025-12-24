<?php

class PayPalPaymentGateway implements GatewayPay {
    public function sendPayment(float $amount): string {
        return "{$amount} payment processed by Paypal";
    }
}
