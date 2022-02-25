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
            'password' => 'required|Min:8',
        ]);

        $user = new User;

        $checkEmail = User::query()->where('email',$request->email)->count();
        $checkStd_id = User::query()->where('std_id',$request->std_id)->count();
    
        if($checkEmail > 0 ){
            session(['reg-email'=>$request->email]);
            session(['reg-fname'=>$request->firstname]);
            session(['reg-lname'=>$request->lastname]);
            session(['reg-std_id'=>$request->std_id]);
            
            return redirect('register')->with('error-email','อีเมลนี้ถูกใช้แล้ว');
        }

        if($checkStd_id > 0){
            session(['reg-email'=>$request->email]);
            session(['reg-fname'=>$request->firstname]);
            session(['reg-lname'=>$request->lastname]);
            session(['reg-std_id'=>$request->std_id]);

            return redirect('register')->with('error-std_id','รหัสนักศึกษานี้ถูกใช้แล้ว');
        }

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
