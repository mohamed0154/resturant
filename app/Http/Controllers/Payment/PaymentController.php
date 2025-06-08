<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\services\PaymentServices;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct(
        private PaymentServices $paymentService
    ) {}

    public function payment()
    {
        return $this->paymentService->payment();
    }
}
