<?php

namespace App\Http\Controllers;

use App\Models\chicken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\chickenphase;

class PhaseController extends Controller
{
    public function managePhase(Request $request){

        $role = Auth::user()->role;

        if($role == "admin" || $role == "superadmin"){

            $search = $request->search;
            
            if($search == null){
                $phases = chickenphase::all()->where('active','=','1');
            
                return view('admin.manage-phase',compact('phases'));
            }else{
                $phases = chickenphase::query()->where('id','LIKE',"%{$search}%")->orWhere('phase_name','LIKE',"%{$search}%")->where('active','=','1')->get();
                return view('admin.manage-phase',compact('phases'));
            }


        }else{

            return redirect('/');
            
        }

    }

    public function savePhase(Request $request){

        $request->validate([
            'phase_name' => 'required',
        ]);

        $n = chickenphase::query()->where('phase_name',$request->phase_name)->where('active','1')->count();

        if( $n > 0 ){
            return redirect('manage-phase')->with('error','ชื่อระยะเติบโตซ้ำ');
        }else{
            $chickenPhase = new chickenphase;
            $chickenPhase->phase_name = $request->phase_name;
            if($chickenPhase->save()){
                return redirect('manage-phase')->with('success', 'เพิ่มระยะเติบโตสำเร็จ');
            }else{
                return redirect('manage-phase')->with('error','เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
            }
        }
    }

    public function editPhase(Request $request){

        $request->validate([
            'phase_name' => 'required',
            'id' => 'required',
        ]);

        $id = $request->id;

        $n = chickenphase::query()->where('phase_name',$request->phase_name)->where('active','1')->count();

        if($n > 0){

            return redirect('manage-phase')->with('error', 'ชื่อระยะเติบโตซ้ำ');

        }else{
            
            $phase = chickenphase::find($id);
            $phase->phase_name = $request->phase_name;
            if($phase->save()){
                return redirect('manage-phase')->with('success', 'แก้ไขระยะเติบโตสำเร็จ');
            }else{
                return redirect('manage-phase')->with('error', 'เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
            }
        }
    }

    public function delPhase(Request $request){
        
        $id = $request->id;

        $phase = chickenphase::find($id);
        $phase->active = 0;
        if($phase->save()){
            return redirect('manage-phase')->with('success','ลบระยะเติบโตสำเร็จ');
        }else{
            return redirect('manage-phase')->with('error', 'เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
        }

    }
}
