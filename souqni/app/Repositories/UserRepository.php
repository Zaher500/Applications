<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function create(array $data)
    {
        return User::create([
        'role_id' => 2,
        'user_name' => $data['username'],
        'password' => $data['password'], // تشفير كلمة المرور
        'email' => $data['email'],
        'phone' => $data['phone'],
        'address' => $data['address'],
    ]);
    }

    public function findByEmail(string $email)
    {
        return User::where('email', $email)->first();
    }
}
