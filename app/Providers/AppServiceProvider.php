<?php

namespace App\Providers;

use App\Billing\BankAccount;
use App\Billing\BankAccountContract;
use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentForm;
use App\Billing\PaymentFormContract;
use App\Billing\PaymentGatewayContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class , function ($app){
            if(request()->has('fees')){
                return new CreditPaymentGateway('usd');
            }
            return new BankPaymentGateway('usd');
        });
        $this->app->singleton(BankAccountContract::class,function ($app){
            return new BankAccount('abbabc2@gmail.com');
        });
        $this->app->singleton(PaymentFormContract::class,function ($app){
            return new PaymentForm('VISA' , base64_encode('0911414855'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
