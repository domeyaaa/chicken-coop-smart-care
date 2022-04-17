<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use Illuminate\Support\Facades\Auth;


class FoodController extends Controller
{

    public function manageFood(Request $request){
        $role = Auth::user()->role;

        if($role == 'admin' || $role == 'superadmin'){

            $search = $request->search;
            if($search == null){
                $foods = food::query()->where('active','=','1')->orderBy('name')->get();
                return view('admin.manage-food',compact('foods'));

            }else{
                $foods = food::query()->where('name','LIKE',"%{$search}%")->where('active','=','1')->orderBy('name')->get();
                return view('admin.manage-food',compact('foods'));
            }
        }else{
            return redirect('/');
        }
    }

    public function saveFood(Request $request){
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        $n = food::query()->where('name',$request->name)->where('active','1')->count();

        if($n > 0 ){
            return redirect('manage-food')->with('error','ชื่ออาหารซ้ำ');
        }else{
            $foods = new food;
            $foods->name = $request->name;
            $foods->detail = $request->detail;
            if($foods->save()){
                return redirect('manage-food')->with('success','เพิ่มอาหารสำเร็จ');
            }else{
                return redirect('manage-food')->with('error', 'เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
            }
        }
    }

    public function editFood(Request $request){
        $request->validate([
            'id'=> 'required',
            'name_edit' => 'required',
            'detail_edit' => 'required'
        ]);
        
        $id = $request->id;
        $food = food::find($id);
        $food->name = $request->name_edit;
        $food->detail = $request->detail_edit;
        if($food->save()){
            return redirect('manage-food')->with('success','แก้ไขอาหารสำเร็จ');
        }else{
            return redirect('manage-food')->with('error', 'เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
        }
    }

    public function delFood(Request $request){

        $id = $request->id;

        $food = food::find($id);
        $food->active = 0;
        if($food->save()){
            return redirect('manage-food')->with('success','ลบอาหารสำเร็จ');
        }else{
            return redirect('manage-food')->with('error', 'เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
        }
    }
}
