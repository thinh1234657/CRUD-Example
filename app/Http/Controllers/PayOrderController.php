<?php

namespace App\Http\Controllers;

use App\Billing\BankAccount;
use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Order\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails , PaymentGatewayContract $paymentGateway){
        $order = $orderDetails->all();
        dd($paymentGateway->charge('2500'));
    }
}
