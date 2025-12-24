<?php

interface GatewayPay {
    public function sendPayment(float $amount): string;
}
