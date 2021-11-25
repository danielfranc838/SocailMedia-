<?php

namespace App\Http\Controllers\LayoutsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //function to display the view of the project
    public function index(Request $request){
        return view('layouts.project');
    }
}
