<?php

namespace App\Http\Controllers\LayoutsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthencationController extends Controller
{
    //function to display authentication view
    public function index(Request $request){
        return view('layouts.login');
    }
}
