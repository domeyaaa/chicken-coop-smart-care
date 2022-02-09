<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use Illuminate\Support\Facades\Auth;


class FoodController extends Controller
{

    public function manageFood(Request $request){
        $active = Auth::user()->active;
        $role = Auth::user()->role;

        if($role == '1' && $active == '1'){

            $search = $request->search;
            if($search == null){
                $foods = food::query()->where('active','=','1')->orderBy('name')->get();
                return view('admin.manage-food',compact('foods'));

            }else{
                $foods = food::query()->where('name','LIKE',"%{$search}%")->where('active','=','1')->orderBy('name')->get();
                return view('admin.manage-food',compact('foods'));
            }


        }else if($role == '0' && $active == '1'){
            return view('home');
        }else{
            return redirect('/');
        }
    }

    public function saveFood(Request $request){
        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        $foods = new food;

        $foods->name = $request->name;
        $foods->detail = $request->detail;
        $foods->save();

        return redirect('manage-food')->with('success','เพิ่มอาหารสำเร็จ');
    }

    public function editFood(Request $request){
        
        $id = $request->id;

        $food = food::find($id);
        $food->name = $request->name_edit;
        $food->detail = $request->detail_edit;
        $food->save();

        return redirect('manage-food')->with('success','แก้ไขสำเร็จ');

    }

    public function delFood(Request $request){

        $id = $request->id;

        $food = food::find($id);
        $food->active = 0;
        $food->save();

        return redirect('manage-food')->with('success','ลบสำเร็จ');

    }
}
