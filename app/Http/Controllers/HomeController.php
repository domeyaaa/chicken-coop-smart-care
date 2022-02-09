<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\chickenspecie;
use App\Models\stall;
use App\Models\food;
use App\Models\vaccine;

class HomeController extends Controller
{
    public function home(Request $request)
    {

        $active = Auth::user()->active;
        $role = Auth::user()->role;


        if ($role == '1' && $active == '1') {

            $search = $request->search;
            $filter = $request->filter;

            if ($search != null) {
                if ($filter == 1) {
                    $users = User::query()->where('firstname', 'LIKE', "%{$search}%")->orWhere('lastname', 'LIKE', "%{$search}%")->orWhere('std_id', 'LIKE', "%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->orderBy('id')->where('active','0')->where('role','0')->get();

                    return view('admin.home', compact('users'));
                }else if($filter == 2){
                    $users = User::query()->where('firstname', 'LIKE', "%{$search}%")->orWhere('lastname', 'LIKE', "%{$search}%")->orWhere('std_id', 'LIKE', "%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->orderBy('id')->where('active','0')->where('role','0')->where('std_id','!=',null)->get();

                    return view('admin.home', compact('users'));
                }else{
                    $users = User::query()->where('firstname', 'LIKE', "%{$search}%")->orWhere('lastname', 'LIKE', "%{$search}%")->orWhere('std_id', 'LIKE', "%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->orderBy('id')->where('active','0')->where('role','0')->where('std_id','=',null)->get();

                    return view('admin.home', compact('users'));
                }
            } else {

                if($filter == 2){
                    $users = User::query()->where('active', '0')->where('std_id','!=',null)->orderByDesc('id')->get();

                    return view('admin.home', compact('users'));
                }else if($filter == 3){
                    $users = User::query()->where('active', '0')->where('std_id','=',null)->orderByDesc('id')->get();
                    return view('admin.home', compact('users'));
                }else{
                    $users = User::where('active', '0')->orderByDesc('id')->get();

                    return view('admin.home', compact('users'));
                }
            }
        } else if ($role == '0' && $active == '1') {
            return view('home');
        } else {
            return redirect('logout')->with('error', 'คุณยังไม่ได้รับการอนุมัติบัญชีผู้ใช้');
        }
    }

    public function menu()
    {
        $active = Auth::user()->active;
        $role = Auth::user()->role;

        if ($role == '1' && $active == '1') {
            return view('admin.menu');
        } else if ($role == '0' && $active == '1') {
            return view('menu');
        } else {
            return redirect('logout');
        }
    }

    public function checkegg()
    {
        $active = Auth::user()->active;
        $role = Auth::user()->role;

        if ($role == '1' && $active == '1') {
            return view('admin.home');
        } else if ($role == '0' && $active == '1') {
            return view('check-egg');
        } else {
            return redirect('logout');
        }
    }

    public function breedegg()
    {
        $active = Auth::user()->active;
        $role = Auth::user()->role;

        if ($role == '1' && $active == '1') {
            return view('admin.home');
        } else if ($role == '0' && $active == '1') {
            return view('breed-egg');
        } else {
            return redirect('logout');
        }
    }
}
