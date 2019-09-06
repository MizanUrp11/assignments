<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewServices extends Controller
{
    public function index(){
        return view('services');
    }
}
