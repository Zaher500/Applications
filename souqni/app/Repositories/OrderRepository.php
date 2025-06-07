<?php

namespace App\Repositories;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderRepository
{
    public function store(int $paymentMethod, float $amount, int $customerId): Order
    {
        return Order::create([
            'customer_id' => $customerId,
            'payment_id' => $paymentMethod,  // تمثل نوع الدفع
            'order_date' => now(),
            'total_amount' => $amount,
        ]);
    }
}

