<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\services\PaymentServices;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private PaymentServices $paymentService;
    public function __construct(PaymentServices $paymentService) {
        $this->paymentService = $paymentService;
    }
    


    public function payment(){
        return $this->paymentService->payment();
    }
}
