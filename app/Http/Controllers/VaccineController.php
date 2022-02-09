<?php

namespace App\Http\Controllers;

use App\Models\vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VaccineController extends Controller
{
    public function manageVaccine(Request $request)
    {
        $active = Auth::user()->active;
        $role = Auth::user()->role;

        if ($role == '1' && $active == '1') {

            $search = $request->search;
            if ($search == null) {

                $vaccines = vaccine::all()->where('active', '=', '1');
                
                return view('admin.manage-vaccine', compact('vaccines'));
            }else{
                $vaccines = vaccine::query()->where('name','LIKE',"%{$search}%")->where('active','=','1')->get();

                return view('admin.manage-vaccine', compact('vaccines'));
            }

        } else if ($role == '0' && $active == '1') {
            return view('home');
        } else {
            return redirect('/');
        }
    }

    public function saveVaccine(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $vaccine = new vaccine;

        $vaccine->name = $request->name;
        $vaccine->detail = $request->detail;
        $vaccine->save();

        return redirect('manage-vaccine')->with('success', 'เพิ่มวัคซีนสำเร็จ');
    }

    public function editVaccine(Request $request)
    {

        $id = $request->id;

        $vaccine = vaccine::find($id);
        $vaccine->name = $request->name_edit;
        $vaccine->detail = $request->detail_edit;
        $vaccine->save();

        return redirect('manage-vaccine')->with('success', 'แก้ไขสำเร็จ');
    }

    public function delVaccine(Request $request){
        $id = $request->id;

        $vaccine = vaccine::find($id);
        $vaccine->active = 0;
        $vaccine->save(); 
        return redirect('manage-vaccine')->with('success','ลบสำเร็จ');

    }
}
