<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(array $data)
    {
        // Encrypt the password
        $data['password'] = Hash::make($data['password']);

        // Pass data to the repository
        return $this->userRepository->register_user($data);
    }

    public function login(array $credentials, $role_id)
    {
        if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->role_id == $role_id) {
            return $user;  // تسجيل الدخول ناجح والدور مطابق
        } else {
            Auth::logout(); // الدور غير مطابق، اقطع الجلسة
            return false;
        }


    return false;
    }
}
}
