<?php
namespace App\Strategies\Payment;

interface PaymentStrategy {
    public function pay(float $amount): string;
}