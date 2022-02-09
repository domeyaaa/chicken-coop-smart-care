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
        $active = Auth::user()->active;
        $role = Auth::user()->role;

        if ($role == '1' && $active == '1') {

            $search = $request->search;
            if ($search == null) {

                $species = chickenspecie::all()->where('active', '=', '1');
                return view('admin.manage-specie', compact('species'));
            } else {

                $species = chickenspecie::query()->where('name', 'LIKE', "%{$search}%")->where('active', '=', '1')->get();
                return view('admin.manage-specie', compact('species'));
            }
        } else if ($role == '0' && $active == '1') {

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

        $specie = new chickenspecie;

        $specie->name = $request->specie_name;
        $specie->save();

        return redirect('manage-specie')->with('success', 'เพิ่มสายพันธุ์ไก่สำเร็จ');
    }

    public function editSpecie(Request $request)
    {

        $id = $request->id;

        $specie =  chickenspecie::find($id);
        $specie->name = $request->name_edit;
        $specie->save();

        return redirect('manage-specie')->with('success', 'แก้ไขสำเร็จ');
    }

    public function delSpecie(Request $request)
    {
        $id = $request->id;

        $specie = chickenspecie::find($id);
        $specie->active = 0;
        $specie->save();

        return redirect('manage-specie')->with('success','ลบสายพันธุ์ไก่สำเร็จ');
    }
}
