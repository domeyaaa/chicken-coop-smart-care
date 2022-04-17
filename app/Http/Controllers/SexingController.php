<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class SexingController extends Controller
{
    public function index(){
        $role = Auth::user()->role;
        if($role == 'user'){
            return view('sexing');
        }else{
            return redirect('/');
        }
    }
}
