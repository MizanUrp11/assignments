<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userRegisterController extends Controller
{
    public function index(){
        return view('user.register');
    }
    
    public function register(){
        $this->validate(request(),[
           'username'=>'required', 
           'firstname'=>'required', 
           'lastname'=>'required', 
           'phone'=>'required', 
           'email'=>'required', 
           'gender'=>'required', 
           'location'=>'required', 
           'image'=>'required'
        ]);
        
        $imagename = uniqid().'.jpg';
        if(request()->hasFile('image')){
            request('image')->move('image/',$imagename);
            User::create([
                'username'=>request('username'), 
                'firstname'=>request('firstname'), 
                'lastname'=>request('lastname'), 
                'phone'=>request('phone'), 
                'email'=>request('email'), 
                'gender'=>request('gender'), 
                'location'=>request('location'), 
                'image'=>$imagename
            ]);
        }
        return redirect(route('user.all'));
        
    }
}
