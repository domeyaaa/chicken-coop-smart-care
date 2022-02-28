<?php

namespace App\Http\Controllers;

use App\Models\chickenspecie;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChickenSpecieController extends Controller
{


    public function manageSpecie(Request $request)
    {
        $role = Auth::user()->role;

        if ($role == '1') {

            $search = $request->search;
            if ($search == null) {

                $species = chickenspecie::all()->where('active', '=', '1');
                return view('admin.manage-specie', compact('species'));
            } else {

                $species = chickenspecie::query()->where('name', 'LIKE', "%{$search}%")->where('active', '=', '1')->get();
                return view('admin.manage-specie', compact('species'));
            }
        } else if ($role == '0') {

            return view('home');
        } else {

            return redirect('/');
        }
    }


    public function saveSpecie(Request $request)
    {
        $request->validate([
            'specie_name' => 'required',
        ]);

        $n = chickenspecie::query()->where('name',$request->specie_name)->where('active','1')->count();

        if($n > 0 ){
            return redirect('manage-specie')->with('error', 'ชื่อสายพันธุ์ซ้ำ');
        }else{
            $specie = new chickenspecie;
            $specie->name = $request->specie_name;

            if($specie->save()){
                return redirect('manage-specie')->with('success', 'เพิ่มสายพันธุ์ไก่สำเร็จ');
            }else{
                return redirect('manage-specie')->with('error', 'เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
            }
        }
    }

    public function editSpecie(Request $request)
    {

        $id = $request->id;
        $n = chickenspecie::query()->where('name',$request->name_edit)->where('active','1')->count();

        if($n > 0 ){
            return redirect('manage-specie')->with('error', 'ชื่อสายพันธุ์ซ้ำ');
        }else{
            $specie =  chickenspecie::find($id);
            $specie->name = $request->name_edit;
            if($specie->save()){
                return redirect('manage-specie')->with('success', 'แก้ไขชื่อสายพันธุ์สำเร็จ');
            }else{
                return redirect('manage-specie')->with('error', 'เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
            }
        }
        
    }

    public function delSpecie(Request $request)
    {
        $id = $request->id;

        $specie = chickenspecie::find($id);
        $specie->active = 0;
        if($specie->save()){
            return redirect('manage-specie')->with('success','ลบสายพันธุ์สำเร็จ');
        }else{
            return redirect('manage-specie')->with('error','เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
        }
        

        
    }
}
