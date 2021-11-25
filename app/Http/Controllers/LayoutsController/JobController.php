<?php

namespace App\Http\Controllers\LayoutsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //function to display the view of the job page
    public function index(Request $request){
        return view('layouts.job');
    }
}
