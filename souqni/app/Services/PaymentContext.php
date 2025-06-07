<?php

namespace App\Services;

use App\Strategies\Payment\PaymentStrategy;

class PaymentContext {
    private PaymentStrategy $strategy;

    public function __construct(PaymentStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(PaymentStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function pay(float $amount): string {
        return $this->strategy->pay($amount);
    }
}
