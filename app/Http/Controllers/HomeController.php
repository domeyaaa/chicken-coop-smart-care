<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function home(Request $request)
    {

        $role = Auth::user()->role;

        if ($role == '1') {

            $search = $request->search;
            $filter = $request->filter;

            if ($search != null) {
                if ($filter == 1) {
                    $user1 = User::query()->where('active',0)->where('role',0)->get();
                    $user2 = User::query()->where('firstname', 'LIKE', "%{$search}%")->orWhere('lastname', 'LIKE', "%{$search}%")->orWhere('std_id', 'LIKE', "%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->get();
                    $users = $user2->intersect($user1);
                    return view('admin.home', compact('users'));
                }else if($filter == 2){
                    $user1 = User::query()->where('active',0)->where('role',0)->where('std_id','!=',null)->get();
                    $user2 = User::query()->where('firstname', 'LIKE', "%{$search}%")->orWhere('lastname', 'LIKE', "%{$search}%")->orWhere('std_id', 'LIKE', "%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->get();
                    $users = $user2->intersect($user1);
                    return view('admin.home', compact('users'));
                }else{
                    $user1 = User::query()->where('active',0)->where('role',0)->where('std_id','=',null)->get();
                    $user2 = User::query()->where('firstname', 'LIKE', "%{$search}%")->orWhere('lastname', 'LIKE', "%{$search}%")->orWhere('std_id', 'LIKE', "%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->get();
                    $users = $user2->intersect($user1);
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
        } else if ($role == '0') {

            return view('home');
        } else {
            return redirect('/');
        }
    }

    public function menu()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.menu');
        } else if ($role == '0') {
            return view('menu');
        } else {
            return redirect('/');
        }
    }

    public function checkegg()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.home');
        } else if ($role == '0') {
            return view('check-egg');
        } else {
            return redirect('/');
        }
    }

    public function breedegg()
    {
        $role = Auth::user()->role;

        if ($role == '1') {
            return view('admin.home');
        } else if ($role == '0') {
            return view('breed-egg');
        } else {
            return redirect('/');
        }
    }
}
