<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;



class SendSMSController extends Controller
{
    public function index()
    {
        // $basic  = new \Nexmo\Client\Credentials\Basic(env('NEXMO_KEY'), env('NEXMO_SECRET'));
        // $client = new \Nexmo\Client($basic);

        // $message = $client->message()->send([
        //     'to' => '237671307800',
        //     'from' => 'John Doe',
        //     'text' => 'A simple hello message sent from Vonage SMS API'
        // ]);

        echo 'SMS message has been delivered.';

    }
}
