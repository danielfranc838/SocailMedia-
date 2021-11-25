<?php

namespace App\Http\Controllers\LayoutsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
        //function to display the view of the message page
        public function index(Request $request){
            return view('layouts.message');
        }
}
