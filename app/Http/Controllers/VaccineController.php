<?php

namespace App\Http\Controllers;

use App\Models\vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VaccineController extends Controller
{
    public function manageVaccine(Request $request)
    {
        $role = Auth::user()->role;

        if ($role == 'admin' || $role == 'superadmin') {

            $search = $request->search;
            if ($search == null) {

                $vaccines = vaccine::all()->where('active', '=', '1');
                
                return view('admin.manage-vaccine', compact('vaccines'));
            }else{
                $vaccines = vaccine::query()->where('name','LIKE',"%{$search}%")->where('active','=','1')->get();

                return view('admin.manage-vaccine', compact('vaccines'));
            }
        }else {
            return redirect('/');
        }
    }

    public function saveVaccine(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $n = vaccine::query()->where('name',$request->name)->where('active','1')->count();

        if($n > 0){
            return redirect('manage-vaccine')->with('error','ชื่อวัคซีนซ้ำ');
        }else{
            $vaccine = new vaccine;
            $vaccine->name = $request->name;
            $vaccine->detail = $request->detail;
            
            if($vaccine->save()){
                return redirect('manage-vaccine')->with('success', 'เพิ่มวัคซีนสำเร็จ');
            }else{
                return redirect('manage-vaccine')->with('error','เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
            }
        }
        
    }

    public function editVaccine(Request $request)
    {

        $id = $request->id;

        $vaccine = vaccine::find($id);
        $vaccine->name = $request->name_edit;
        $vaccine->detail = $request->detail_edit;
        
        if($vaccine->save()){
            return redirect('manage-vaccine')->with('success', 'แก้ไขวัคซีนสำเร็จ');
        }else{
            return redirect('manage-vaccine')->with('error','เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
        }
        
    }

    public function delVaccine(Request $request){
        $id = $request->id;
        $vaccine = vaccine::find($id);
        $vaccine->active = 0;
        $vaccine->save(); 


        return redirect('manage-vaccine')->with('success','ลบวัคซีนสำเร็จ');

    }
}
