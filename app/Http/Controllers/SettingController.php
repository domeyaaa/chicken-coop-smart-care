<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SettingController extends Controller
{
    public function getProfile()
    {

        $role = Auth::user()->role;

        if ($role == '0') {
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
        
    }
}
