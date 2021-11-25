<?php

namespace App\Http\Controllers\LayoutsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //function to display the view of the company page
    public function index(Request $request){
        return view('layouts.company');
    }
}
