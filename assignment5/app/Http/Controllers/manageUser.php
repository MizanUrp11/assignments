<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class manageUser extends Controller
{
    public function edit($id){
        $row = User::find($id);
        return view('user.edit',compact('row'));
    }
    public function delete($id){
        User::find($id)->delete();
        return redirect()->route('user.all')->with('deleteSuccess','Deleted successfully!');
    }
}
