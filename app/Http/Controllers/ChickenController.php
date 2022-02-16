<?php

namespace App\Http\Controllers;

use App\Models\chicken;
use App\Models\Chickenphase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\stall;
use Chicken as GlobalChicken;

class ChickenController extends Controller
{
    public function allChicken(Request $request){

        $role = Auth::user()->role;

        if($role == '0'){
            
            $allStall = stall::all();
            $allPhase = Chickenphase::all();
            $allChicken = Chicken::join('chickenphases','chickenphases.id','=','chickens.chicken_phase_id')->join('chickenspecies','chickenspecies.id','=','chickens.chickenspecies_id')->orderBy('chickens.id')->get(['chickens.*','chickenphases.phase_name','chickenspecies.name AS specie_name']);
            $num = chicken::count();
            
            return view('chicken/all',compact('allStall','num','allPhase','allChicken'));
        }else{
            return redirect('/');
        }
    }

    public function dataChicken($id){

        $role = Auth::user()->role;

        if($role == '0'){
            $info = chicken::query()->where('chickens.id',$id)->join('chickenphases','chickenphases.id','=','chickens.chicken_phase_id')->join('chickenspecies','chickenspecies.id','=','chickens.chickenspecies_id')->first(['chickens.*','chickenphases.phase_name','chickenspecies.name AS specie_name']);
            
            return view('chicken.information',compact('info'));
        }else{
            return redirect('/');
        }
        
    } 
}
