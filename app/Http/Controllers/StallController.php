<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stall;
use Illuminate\Support\Facades\Auth;

class StallController extends Controller
{

    public function manageCoop(Request $request){

        $role = Auth::user()->role;

        if($role == 'admin' || $role == 'superadmin'){

            $search = $request->search;

            if($search == null){
                $stalls = stall::all()->where('active','=','1');

                return view('admin.manage-coop',compact('stalls'));
            }else{
                $stalls = stall::query()->where('id','LIKE',"%{$search}%")->orWhere('name','LIKE',"%{$search}%")->where('active','=','1')->get();
                return view('admin.manage-coop',compact('stalls'));
            }
        }else{
            return redirect('/');
        }
    }

    public function saveStall(Request $request){
        $request->validate([
            'stall_id' => 'required',
            'stall_name' => 'required',
        ]);

        $n = stall::query()->where('id',$request->stall_id)->where('active','1')->count();

        if($n >0 ){
            return redirect('manage-coop')->with('error','รหัสคอกซ้ำ');
        }else{
            $stall = new stall;

            $stall->id = $request->stall_id;
            $stall->name = $request->stall_name;
            
            if($stall->save()){
                return redirect('manage-coop')->with('success','เพิ่มคอกสำเร็จ');
            }else{
                return redirect('manage-coop')->with('error','เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
            }
        }
        
    }

    public function editStall(Request $request){
        
        $request->validate([
            'id' => 'required',
            'name_edit' => 'required',
        ]);

        $id = $request->id;

        $stall = stall::find($id);
        $stall->name = $request->name_edit;
        if($stall->save()){
            return redirect('manage-coop')->with('success','แก้ไขคอกสำเร็จ');
        }else{
            return redirect('manage-coop')->with('error','เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
        }
    }

    public function delStall(Request $request){
        
        $id = $request->id;

        $stall = stall::find($id);
        $stall->active = 0;
        if($stall->save()){
            return redirect('manage-coop')->with('success','ลบคอกสำเร็จ');
        }else{
            return redirect('manage-coop')->with('error','เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
        }
    }
}
