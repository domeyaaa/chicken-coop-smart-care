<?php

namespace App\Http\Controllers;

use App\Models\chicken;
use App\Models\chickenphase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\stall;

class ChickenController extends Controller
{
    public function allChicken(Request $request){

        $role = Auth::user()->role;

        if($role == '0'){
            
            $allStall = stall::all();
            $allPhase = chickenphase::all();
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

    public function getRecordBodySize($id){
        $role = Auth::user()->role;
        if($role == '0'){

            return view('chicken.record-bodysize',compact('id'));

        }else{
            return redirect('/');
        }

    }

    public function getRecordBreed($id){

        $role = Auth::user()->role;
        if($role == '0'){

            return view('chicken.record-breed',compact('id'));

        }else{
            return redirect('/');
        }
    }

    public function getRecordEgg($id){

        $role = Auth::user()->role;
        if($role == '0'){

            return view('chicken.record-egg',compact('id'));

        }else{
            return redirect('/');
        }
    }

    public function getRecordVaccine($id){
        
        $role = Auth::user()->role;
        if($role == '0'){

            return view('chicken.record-vaccine',compact('id'));

        }else{
            return redirect('/');
        } 

    }

    public function getRecordWeight($id){

        $role = Auth::user()->role;
        if($role == '0'){

            return view('chicken.record-weight',compact('id'));

        }else{
            return redirect('/');
        } 

    }

    public function getRecordFeed($id){
        $role = Auth::user()->role;
        if($role == '0'){

            return view('chicken.record-feed',compact('id'));

        }else{
            return redirect('/');
        } 
    }
}
