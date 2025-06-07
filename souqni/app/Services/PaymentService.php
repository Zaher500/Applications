<?php
namespace App\Services;

use App\Strategies\Payment\CreditCardPayment;
use App\Strategies\Payment\PaypalPayment;
use App\Services\PaymentContext;
use App\Repositories\OrderRepository;

class PaymentService
{
    public function handlePayment(int $method, float $amount, int $customerId): string
{
    $strategy = match ($method) {
        2 => new PaypalPayment(),
        1 => new CreditCardPayment(),
        default => throw new \InvalidArgumentException('Invalid payment method'),
    };

    $context = new PaymentContext($strategy);
    $message = $context->pay($amount);


    $orderRepo = new OrderRepository();
    $order = $orderRepo->store($method, $amount, $customerId);

    return "$message - Order ID: {$order->order_id}";
}

}


