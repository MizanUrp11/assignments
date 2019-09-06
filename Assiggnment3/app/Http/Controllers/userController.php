<?php

namespace App\Http\Controllers;
use View;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('index');
    }
}
