<?php

namespace App\Http\Controllers;

use App\Billing\PaymentFormContract;
use Illuminate\Http\Request;

class PaymentFormController extends Controller
{
    public function store(PaymentFormContract $paymentForm){
        dd($paymentForm->form());
    }
}
