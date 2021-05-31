<?php
/**
 * Created by PhpStorm.
 * User: Nammain
 * Date: 5/25/2021
 * Time: 8:41 AM
 */

namespace App\Billing;


class BankAccount implements BankAccountContract
{
    private $email;
    public function __construct($email)
    {
        $this->email = $email;
    }

    public function account($name , $password){
        return[
          'name' => $name,
            'password' => $password,
             'email' => $this->email,
        ];
    }
}