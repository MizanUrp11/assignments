<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewAbout extends Controller
{
    public function index(){
        return view('about');
    }
}
