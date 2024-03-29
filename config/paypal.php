<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    // 'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    // 'sandbox' => [
    //     'username'    => env('PAYPAL_SANDBOX_API_USERNAME', 'sb-e5psk2197232_api1.business.example.com'),
    //     'password'    => env('PAYPAL_SANDBOX_API_PASSWORD', 'EH774WZ4J8L5FH8C'),
    //     'secret'      => env('PAYPAL_SANDBOX_API_SECRET', 'AEUBpq7P1dHj8eZtBGXd5ExDjqkPAuSN49uVwPD0H6-aPI2mBhUtAddT'),
    //     'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
    //     'app_id'      => 'APP-80W284485P519543T', // Used for testing Adaptive Payments API in sandbox mode
    // ],
    // 'live' => [
    //     'username'    => env('PAYPAL_LIVE_API_USERNAME', ''),
    //     'password'    => env('PAYPAL_LIVE_API_PASSWORD', ''),
    //     'secret'      => env('PAYPAL_LIVE_API_SECRET', 'EE1V3L1PE84rTupRQoNdvTzAdj30SS19tRSvrNIxCWCXaB7ELDlL3IcAZrp1iWYHt9W2fTVnBRSaIuVT'),
    //     'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE', ''),
    //     'app_id'      => '', // Used for Adaptive Payments API
    // ],

    // 'payment_action' => 'Sale', // Can only be 'Sale', 'Authorization' or 'Order'
    // 'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    // 'billing_type'   => 'MerchantInitiatedBilling',
    // 'notify_url'     => '', // Change this accordingly for your application.
    // 'locale'         => '', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    // 'validate_ssl'   => true, // Validate SSL when creating api client.

    'client_id' => env('PAYPAL_CLIENT_ID',''),
    'secret' => env('PAYPAL_SECRET',''),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','live'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
