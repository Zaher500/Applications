<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    protected $fillable = [
    'customer_id',
    'payment_id',
    'order_date',
    'total_amount',
];
}
