<?php

namespace App\Strategies\Payment;

class CreditCardPayment implements PaymentStrategy {
    public function pay(float $amount): string {
        return "Paid $amount using Credit Card.";
    }
}
