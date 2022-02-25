<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SettingController extends Controller
{
    public function getProfile(){

        $id = Auth::user()->id;
        $profile = User::find($id);

        return view('setting',compact('profile'));

    }

    public function saveEditProfile(){
        
    }
}
