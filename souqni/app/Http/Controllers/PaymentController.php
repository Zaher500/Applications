<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\PaymentService;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {

        
        $customerId = $request->input('user_id');
        $amount = $request->input('amount');
        $method = $request->input('method');

        $service = new PaymentService();
        $result = $service->handlePayment($method, $amount, $customerId);

        return response()->json(['message' => $result]);
    }
}
