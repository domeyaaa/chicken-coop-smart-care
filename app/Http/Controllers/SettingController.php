<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function getProfile()
    {

        $role = Auth::user()->role;

        if ($role == 'user') {
            $role = Auth::user()->role;
            $id = Auth::user()->id;
            $profile = User::find($id);

            return view('setting', compact('profile'));

        } else {
            return redirect('/');
        }
    }

    public function saveEditProfile(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
        ]);

        
        if(Auth::user()->std_id != $request->std_id){
            if($request->std_id != ''){
                $checkStd_id = User::query()->where('std_id',$request->std_id)->count();
                if($checkStd_id > 0){
                    return redirect('setting')->with('error','รหัสนักศึกษาถูกใช้งานแล้ว');
                }
            }
        }

        if(Auth::user()->email != $request->email){
            $checkEmail = User::query()->where('email',$request->email)->count();
            if($checkEmail > 0 ){
                return redirect('setting')->with('error','อีเมลถูกใช้งานแล้ว');
            }
        }

        $user = User::find(Auth::user()->id);
        if($request->std_id == ''){
            $user->std_id = NULL;
        }else{
            $user->std_id = $request->std_id;
        }

        $user->titlename = $request->title_name;
        $user->firstname = $request->fname;
        $user->lastname = $request->lname;
        $user->email = $request->email;

        if($user->save()){
            return redirect('/setting')->with('success','แก้ไขสำเร็จ');
        }else{
            return redirect('/setting')->with('error','เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
        }
    }

    public function saveNewPassword(Request $request){
        
        $request->validate([
            'pwd_old' => 'required',
            'pwd_new' => 'required',
        ]);

        $user = User::where('id', Auth::user()->id)->first();
        if($user && Hash::check($request->pwd_old, $user->password)){
            $user->password = Hash::make($request->pwd_new);
            if($user->save()){
                return redirect('/setting')->with('success','บันทึกรหัสผ่านใหม่สำเร็จ');
            }else{
                return redirect('/setting')->with('error','เกิดข้อผิดพลาด ลองอีกครั้ง');
            }
        }else{
            return redirect('/setting')->with('error','รหัสผ่านปัจจุบันไม่ถูกต้อง');
        }
    }
}
