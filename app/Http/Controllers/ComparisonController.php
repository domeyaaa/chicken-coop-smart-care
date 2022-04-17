<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComparisonController extends Controller
{
    public function index(){
        $role = Auth::user()->role;

        if($role == 'user'){
            return view('compare-yield');
        }else{
            return redirect('/');
        }
    }

    public function result(){
        $role = Auth::user()->role;

        if($role == 'user'){
            return view('compare-yield-result');
        }else{
            return redirect('/');
        }
    }
}
