<?php

namespace App\Http\Controllers\LayoutsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //function to display the view of the profile
    public function index(Request $request){
        return view('layouts.profile');
    }
}
