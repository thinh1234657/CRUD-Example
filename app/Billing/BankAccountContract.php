<?php
/**
 * Created by PhpStorm.
 * User: Nammain
 * Date: 5/25/2021
 * Time: 8:46 AM
 */

namespace App\Billing;

interface BankAccountContract
{
    public function account($name, $password);
}