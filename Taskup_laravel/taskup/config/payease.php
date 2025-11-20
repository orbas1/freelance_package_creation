<?php

return [

    /**
     * Payment mode test, production
     */
    'mode'    => env('PAYEASE_MODE', 'test'),

    /**
     * Site Currency
     */
    'site_currency' => env('SITE_CURRENCY','USD'),
     /**
     * Paystack base url for using rest APIs.
     */
    'paystack' => [

    ],
     /**
     * Flutterwave base url for using rest APIs.
     */
    'flutterwave' => [
        'logo_url' => '',
    ],
     /**
     * URL about logon that is used for Flutterwave checkout page. (optional)
     */

     /**
     * Paypal base url for using rest APIs.
     */
    'paypal' => [
    ],
];
