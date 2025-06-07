<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
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
        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }

    return redirect()->back()->with('error', 'Registration failed. Please try again.');
}


  public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    $role =$request->validate([
        'role' => 'required'
    ]);

     // تحويل قيمة النص role إلى رقم role_id
    $roleMapping = [
        'customer' => 2,
        'sales person' => 3,
    ];
    $role_id = $roleMapping[$request['role']] ?? null;

    $user = $this->userService->login($credentials, $role_id);

    if ($user) {
        $request->session()->regenerate();
        return redirect('/home')->with('success', 'Login successful!');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}


public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');
}
    
}

