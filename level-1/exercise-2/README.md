# Sprint-3-PHP-and-Patterns
## Tasca S3.01. SOLID
Level 1 - Exercise 2

**Objectives**
Apply the SOLID principles by refactoring source code.
In this installment, we propose code refactoring exercises (improving existing code to make it better quality) 
to begin to understand in practice how to apply the SOLID principles.
Therefore, you will start with previously written source code that you will have to analyze, understand, and 
then refactor in accordance with each of the principles.
Refactor the following source code to comply with the D of SOLID.

### Initial code for refactoring
```php
<?php
class BankTransfer
{
    public function sendTransfer(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
}

<?php

class PaymentProcessor
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new StripePaymentGateway();
    }

    public function procesarPago(float $cantidad): string
    {
        return $this->gateway->sendPayment($cantidad);
    }
}

<?php

class PayPalPaymentGateway
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal";
    }
}

<?php 

class StripePaymentGateway
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed with Stripe";
    }
}

?>
```

/exercise
    ├── scr/                                    # Source code 
    |     ├── classes/ 
    |     │     ├── BankTransfer.php            # BankTransfer class, which implements an interface named GatewayPay.
    |     │     ├── GatewayPay.php              # GatewayPay class, define an interface.
    |     │     ├── PaymentProcessor.php        # Define a class called PaymentProcessor that uses the GatewayPay interface.
    |     │     ├── PaypalPaymentGateway.php    # Define a class called PayPalPaymentGateway that implements the GatewayPay interface.
    |     │     └── StripePaymentGateway.php    # Define a class called StripePaymentGateway that implements the GatewayPay interface.
    |     └── index.php                         # Main script
    └── README.md                               # Exercise documentation 

