<?php

namespace App\Http\Controllers\LayoutsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyprofilefeedController extends Controller
{
    public function index(Request $request){
        return view('layouts.my_profile_feed');
    }
}
