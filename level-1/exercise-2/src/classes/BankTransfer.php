<?php

class BankTransfer implements GatewayPay
{
    public function sendPayment(float $amount): string {
        return "{$amount} bank transfer done";
    }
}
