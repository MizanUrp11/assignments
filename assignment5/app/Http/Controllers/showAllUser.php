<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class showAllUser extends Controller
{
    public function index(){
        $users = User::latest()->get();
        return view('user.all', compact(['users']));
    }
}
