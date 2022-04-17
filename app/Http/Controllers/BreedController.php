<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Jetstream\Rules\Role;

class BreedController extends Controller
{
    public function index(){
        $role = Auth::user()->role;

        if($role == 'user'){
            return view('breed');
        }else{
            return redirect('/');
        }

    }
}
