<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserLogoutController extends Controller
{
    public function logyout()
    {
        Auth::logout();
        return redirect(route('user.login'));
    }
}
