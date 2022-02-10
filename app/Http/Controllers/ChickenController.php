<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChickenController extends Controller
{
    public function allChicken(Request $request){

        $active = Auth::user()->active;
        $role = Auth::user()->role;

        if($role == '0' && $active == '1'){

            return view('chicken-all');
        }else{
            
            return redirect('/');
        }


    }
}
