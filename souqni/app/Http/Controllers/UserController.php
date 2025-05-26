<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController
{
    protected $userService;
    
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255|unique:users,user_name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
        ]);

        $user = $this->userService->register($data);

        if ($user) {
            return response()->json(['message' => 'Registration successful!', 'user' => $user], 201);
        }

        return response()->json(['message' => 'Registration failed.'], 400);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        

        $user = $this->userService->login($credentials);

        if ($user) {
            return 'Login successful!';
        }

        return 'Invalid email or password';
    }
}

