<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use Laranex\LaravelMyanmarPayments\LaravelMyanmarPaymentsFacade;

class PaymentController extends Controller
{
    public function checkPayment(PaymentRequest $request)
    {
        $response = LaravelMyanmarPaymentsFacade::channel('2c2p')->parseJWT($request->validated()['payload'], 'MMK');

        return view('dashboard', compact('response'));
    }
}
