<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'titlename' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User;

        $user->titlename = $request->titlename;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->std_id = $request->std_id;
        $user->email = $request->email;
        $user->role = 0;
        $user->role = 0;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/')->with('success','สมัครสมาชิกสำเร็จ');
        
    }
}
