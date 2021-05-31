<?php
/**
 * Created by PhpStorm.
 * User: Nammain
 * Date: 5/24/2021
 * Time: 2:56 PM
 */

namespace App\Order;


use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    private $paymentGateway;
    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;

    }

    public function all(){
        $this->paymentGateway->setDiscount(500);

        return [
          'name' => 'Thinh Nguyen',
            'address' => '47a PVD',
        ];
    }
}