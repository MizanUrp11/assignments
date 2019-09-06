<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class userLoginController extends Controller
{
    public function index(){
        return view('user.login');
    }
    public function login()
    {
        $username = request('username');
        $password = request('password');
        //return request()->all();
        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            Auth::logout();
            dd('logged in');
        }
    }
}
