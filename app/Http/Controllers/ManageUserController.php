<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ManageUserController extends Controller
{

    public function allUser(Request $request)
    {
        $role = Auth::user()->role;

        if ($role == 'admin' || $role == 'superadmin') {

            $users = User::where('active', '=', '1')->where('role', '=', 'user')->orderBy('firstname')->get();

            return view('admin.all-user', compact('users'));
        } else if ($role == '0') {
            return view('home');
        } else {
            return redirect('/');
        }
    }

    public function activeUser(Request $request)
    {
        $id = $request->id;

        foreach ($id as $val) {
            $user = User::find($val);
            $user->active = 1;
            $user->save();
        }

        return redirect('home')->with('success','อนุมัติบัญชีสำเร็จ');
    }
}
