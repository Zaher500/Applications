<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Customers;
use App\Models\sales_person;

class UserRepository
{
    public function register_user(array $data)
    {
        $user = User::create([
        'role_id' => 2,
        'user_name' => $data['username'],
        'password' => $data['password'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'address' => $data['address'],
    ]);

        Customers::create([
        'user_id' => $user->user_id,
        'first_name' => $data['username'],
        'last_name' => null,
        'shipping_address' => $data['address']
    ]);

    return $user;
    }


    public function findByEmail(string $email)
    {
        return User::where('email', $email)->first();
    }
}
