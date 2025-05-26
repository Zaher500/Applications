<?php

namespace App\Services;

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
        return $this->userRepository->create($data);
    }

    public function login(array $credentials)
    {
        $user = $this->userRepository->findByEmail($credentials['email']);
            
        if ($user && Hash::check($credentials['password'], $user->password)) {
            return $user; // Successful login
        }

        return false; // Invalid credentials
    }
}
