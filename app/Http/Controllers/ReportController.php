<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index(){
        $role = Auth::user()->role;
        if($role == 'user'){
            return redirect('/');
        }else{
            return view('admin.report');
        }

    }
}
