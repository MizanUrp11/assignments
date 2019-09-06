<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class suggestionController extends Controller
{
   public function index(User $user)
   {
      $follows = (auth()->user()) ? auth()->user()->following->contains($user->id): false;
      $user = $user->all();
      //dd($users);
    return view('profiles.suggestion',compact('user','follows'));
   }
}
