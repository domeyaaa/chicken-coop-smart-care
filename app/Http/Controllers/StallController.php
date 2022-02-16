<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stall;
use Illuminate\Support\Facades\Auth;

class StallController extends Controller
{

    public function manageCoop(Request $request){

        $role = Auth::user()->role;

        if($role == '1'){

            $search = $request->search;

            if($search == null){
                $stalls = stall::all()->where('active','=','1');

                return view('admin.manage-coop',compact('stalls'));
            }else{

                $stalls = stall::query()->where('id','LIKE',"%{$search}%")->orWhere('name','LIKE',"%{$search}%")->where('active','=','1')->get();
                return view('admin.manage-coop',compact('stalls'));
                
            }
            
            
        }else if($role == '0'){
            return view('home');
        }else{
            return redirect('/');
        }
    }

    public function saveStall(Request $request){
        $request->validate([
            'stall_id' => 'required',
            'stall_name' => 'required',
        ]);

        $stall = new stall;

        $stall->id = $request->stall_id;
        $stall->name = $request->stall_name;
        $stall->save();

        return redirect('manage-coop')->with('success','เพิ่มคอกสำเร็จ');
    }

    public function editStall(Request $request){
        
        $id = $request->id;

        $stall = stall::find($id);
        $stall->name = $request->name_edit;
        $stall->save();

        return redirect('manage-coop')->with('success','แก้ไขสำเร็จ');
    }

    public function delStall(Request $request){
        
        $id = $request->id;

        $stall = stall::find($id);
        $stall->active = 0;
        $stall->save();

        return redirect('manage-coop')->with('success','ลบสำเร็จ');

    }
}
