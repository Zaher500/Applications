<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{

    public function user()
{
    return $this->belongsTo(User::class);
}

    public $timestamps = false;

    protected $fillable = [
    'user_id',
    'first_name',
    'last_name',
    'shipping_address'
];
}
