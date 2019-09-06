<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class editUserController extends Controller
{
    public function update($id){
        $row = User::find($id);
        $imagename = uniqid().'.jpg';
        if(request()->hasFile('image')){
            request('image')->move('image/',$imagename);
            $row->update([
           'username'=>request('username'),
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'email'=>request('email'),
            'gender'=>request('gender'),
            'location'=>request('location'),
            'image'=>$imagename,
        ]);
        }else{
            $row->update([
           'username'=>request('username'),
            'firstname'=>request('firstname'),
            'firstname'=>request('lastname'),
            'firstname'=>request('email'),
            'firstname'=>request('gender'),
            'firstname'=>request('location')
        ]);
        }
        return redirect(route('user.all'));
        
    }
}
