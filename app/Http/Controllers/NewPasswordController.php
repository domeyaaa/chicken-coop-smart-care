<?php

namespace App\Http\Controllers;

use App\Mail\VerifyMail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class NewPasswordController extends Controller
{
    public function index(){
        if(Cookie::get('verify') == true){
            return redirect('new-password');
        }else if(Cookie::get('fg_email') != ""){
            return view('verify');
        }else{
            return view('forget-password');
        }
    }

    public function sendOtp(Request $request){
        $email = $request->email;

        if(Cookie::get('fg_email') != ""){
            $email = Cookie::get('fg_email');
        }else{
            $email = $request->email;
        }

        if (User::where('email', $email )->exists()) {
            
            $otp = rand(000000,999999);
            $en_otp = Hash::make($otp);

            $ref = rand(0000,9999);

            $detail =[
                'title' => 'ชิกเก้นคูปสมาร์ตแคร์(Chicken Coop Smart Care)',
                'otp' => $otp,
                'ref' => $ref,
            ];

            Mail::to($email)->send(new VerifyMail($detail));

            $minutes = 5;

            Cookie::queue('fg_email', $email, $minutes);
            Cookie::queue('en_otp', $en_otp, $minutes);
            Cookie::queue('ref', $ref, $minutes);

            return redirect('verify');

        }else{
            return redirect('forget-password')->with('error_email','ไม่พบอีเมลผู้ใช้');
        }
            
    }

    public function verification(){
        if(Cookie::get('verify') == true){
            return redirect('new-password');
        }else if(Cookie::get('fg_email') != ""){
            return view('verify');
        }else{
            return redirect('forget-password');
        }
    }

    public function checkOtp(Request $request){
        $raw_otp = $request->otp;
        $ck_otp = Cookie::get('en_otp');
        if(Hash::check($raw_otp,$ck_otp)){
            $email = Cookie::get('fg_email');
            Cookie::queue('verify', true, 10);
            Cookie::queue('ck_email',$email , 10);
            return redirect('new-password');
        }else{
            return redirect('verify')->with('error_otp','รหัสยืนยันตัวตนไม่ถูกต้อง');
        }
    }

    public function newPassword(){
        if(Cookie::get('verify') == true){
            return view('new-password');
        }else{
            return redirect('forget-password');
        }   
    }

    public function saveNewPassword(Request $request){

        $email = Cookie::get('ck_email');
        $user = User::query()->where('email',$email)->first();
        $user->password = Hash::make($request->newpassword1);
        $user->save();

        Cookie::queue('fg_email', '', 0);
        Cookie::queue('en_otp', '', 0);
        Cookie::queue('ref', '', 0);
        Cookie::queue('verify', '', 0);
        Cookie::queue('ck_email','' , 0);

        return redirect('/');
    }
}
