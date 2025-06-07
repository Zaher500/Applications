<?php

namespace App\Strategies\Payment;

class PaypalPayment implements PaymentStrategy {
    
    public function pay(float $amount): string {
        return "Paid $amount using PayPal.";
    }
}
