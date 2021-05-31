<?php

namespace App\Http\Controllers;

use App\Billing\BankAccount;
use App\Billing\BankAccountContract;
use Illuminate\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AccountController extends Controller
{
    public function store(BankAccountContract $bankAccount){
        dd($bankAccount->account('thinhcuu',base64_encode('thinhcuu123456')));
    }
}
