<?php

namespace Amentotech\LaraPayEase\Facades;

use Illuminate\Support\Facades\Facade;

/**
 *
 * @method static \Amentotech\LaraPayEase\Drivers\Stripe stripe()
 * @method static \Amentotech\LaraPayEase\Drivers\RazorPay razorpay()
 * @method static \Amentotech\LaraPayEase\Drivers\Flutterwave flutterwave()
 * @method static \Amentotech\LaraPayEase\Drivers\Paystack paystack()
 * @method static \Amentotech\LaraPayEase\Drivers\Paypal paypal()
 * @method static \Amentotech\LaraPayEase\Drivers\PayFast payfast()
 * @method static \Amentotech\LaraPayEase\Drivers\Paytm paytm()
 * @method static array supportedCurrencies()
 * @method static array supportedGateways()
 * @method static string getIpnUrl()
 */

class PaymentDriver extends Facade {

    protected static function getFacadeAccessor(): string
    {
        return 'payment.driver';
    }
}
