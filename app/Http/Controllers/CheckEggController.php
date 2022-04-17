<?php

namespace App\Http\Controllers;

use App\Models\chicken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckEggController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;

        if ($role == 'user') {
            $chickens = Chicken::join('chickenphases','chickenphases.id','=','chickens.chicken_phase_id')->join('chickenspecies','chickenspecies.id','=','chickens.chickenspecies_id')->where('chickens.chicken_phase_id','=',5)->where('chickens.sex','=','เมีย')->orderBy('chickens.id')->select(['chickens.*','chickenspecies.name AS specie_name'])->paginate(12);

            $num = chicken::where('chicken_phase_id',5)->count();
            return view('check-egg',compact('chickens','num'));
        } else {
            return redirect('/');
        }
    }
}
