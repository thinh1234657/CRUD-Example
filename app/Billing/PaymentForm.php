<?php
/**
 * Created by PhpStorm.
 * User: Nammain
 * Date: 5/25/2021
 * Time: 10:46 AM
 */

namespace App\Billing;


class PaymentForm implements PaymentFormContract
{
    private $card_type;
    private $card_number;
    public function __construct($card_type,$card_number)
    {
        $this->card_type = $card_type;
        $this->card_number = $card_number;
    }

    public function form(){

        return [
            'card_type' => $this->card_type,
            'card_number' => $this->card_number,
        ];
    }
}