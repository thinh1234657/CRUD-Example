<?php
/**
 * Created by PhpStorm.
 * User: Nammain
 * Date: 5/24/2021
 * Time: 3:20 PM
 */

namespace App\Billing;

interface PaymentGatewayContract
{
    public function setDiscount($amount);

    public function charge($amount);
}