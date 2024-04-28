<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(){

    
    // dirname(__FILE__) . 'D:/programming/icp/project/vendor/midtrans/midtrans-php-master/Midtrans.php' ;
    
    \Midtrans\Config::$serverKey=config('midtrans.server_key') ; // Set to Development/Sandbox Environment (default). Set to true forProduction Environment (accept real transaction). 

    \Midtrans\Config::$isProduction=false; // Set sanitization on(default)
    \Midtrans\Config::$isSanitized=true; // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds=true;
    
    $params=array( 'transaction_details'=> array(
        'order_id' => rand(),
        'gross_amount' => 10000,
    ),
        'customer_details' => array(
        'first_name' => 'budi',
        'last_name' => 'pratama',
        'email' => 'budi.pra@example.com',
        'phone' => '08111222333',
        ),
    );

    $snapToken = \Midtrans\Snap::getSnapToken($params);
}
}