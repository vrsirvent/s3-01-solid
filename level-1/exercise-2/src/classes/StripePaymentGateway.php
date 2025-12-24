<?php

class StripePaymentGateway implements GatewayPay {
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}
