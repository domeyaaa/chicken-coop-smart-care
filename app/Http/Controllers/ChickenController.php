<?php

namespace App\Http\Controllers;

use App\Models\chicken;
use App\Models\chickenphase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\stall;
use App\Models\chickenspecie;
use App\Models\body;
use App\Models\vaccinate;
use App\Models\vaccine;
use App\Models\breed;
use App\Models\checkegg;

class ChickenController extends Controller
{
    public function allChicken(Request $request){

        $role = Auth::user()->role;

        if($role == 'user'){
            
            $allStall = stall::all();
            $allPhase = chickenphase::all();
            $allChicken = Chicken::join('chickenphases','chickenphases.id','=','chickens.chicken_phase_id')->join('chickenspecies','chickenspecies.id','=','chickens.chickenspecies_id')->orderBy('chickens.id')->select(['chickens.*','chickenphases.phase_name','chickenspecies.name AS specie_name'])->paginate(12);
            $num = chicken::count();
            
            return view('chicken/all',compact('allStall','num','allPhase','allChicken'));
        }else{
            return redirect('/');
        }
    }

    public function dataChicken($id){

        $role = Auth::user()->role;

        if($role == 'user'){
            $info = chicken::query()->where('chickens.id',$id)->join('chickenphases','chickenphases.id','=','chickens.chicken_phase_id')->join('chickenspecies','chickenspecies.id','=','chickens.chickenspecies_id')->first(['chickens.*','chickenphases.phase_name','chickenspecies.name AS specie_name']);
            
            return view('chicken.information',compact('info'));
        }else{
            return redirect('/');
        }
      
    } 

    public function getRecordBodySize($id){
        $role = Auth::user()->role;
        if($role == 'user'){
            return view('chicken.record-bodysize',compact('id',));

        }else{
            return redirect('/');
        }

    }

    public function getRecordBreed($id){

        $role = Auth::user()->role;
        if($role == 'user'){
            $breedes = breed::where('chicken_id',$id)->where('active',1)->paginate(6);
            return view('chicken.record-breed',compact('id','breedes'));

        }else{
            return redirect('/');
        }
    }

    public function editRecordBreed(Request $request){

        $bd = breed::where('id',$request->id)->first();
        $bd->chicken_hen_id = $request->ck_hen;
        $bd->egg_total = $request->egg_total;
        $bd->egg_infected_total = $request->egg_inf_total;
        if($bd->save()){
            return back()->with('success', 'แก้ไขคู่ผสมสำเร็จ');   
        }else{
            return back()->with('error', 'เกิดข้อผิดพลาด ลองอีกครั้ง');   
        }
    }

    public function delRecordBreed(Request $request){
        $bd = breed::find($request->id);
        $bd->active = 0;
        if($bd->save()){
            return back()->with('success', 'ลบคู่ผสมสำเร็จ');   
        }else{
            return back()->with('error', 'เกิดข้อผิดพลาด ลองอีกครั้ง');   
        }
    }

    public function getRecordEgg($id){

        $role = Auth::user()->role;
        if($role == 'user'){
            $checkegg = checkegg::where('chicken_id',$id)->get();
            return view('chicken.record-egg',compact('id'));
        }else{
            return redirect('/');
        }
    }

    public function getRecordVaccine($id){
        
        $role = Auth::user()->role;
        if($role == 'user'){
            $allVaccine = vaccine::all();
            $vaccinates = vaccinate::join('vaccines','vaccinate.vaccine_id','=','vaccines.id')->where('vaccinate.chicken_id',$id)->where('vaccinate.active',1)->select(['vaccinate.*','vaccines.name','vaccines.id AS vid'])->paginate(6);
            return view('chicken.record-vaccine',compact('id','vaccinates','allVaccine'));
        }else{
            return redirect('/');
        } 

    }

    public function editRecordVaccine(Request $request){

        $vc = vaccinate::where('id',$request->id)->first();
        $vc->vaccine_id = $request->v_id;
        $vc->chicken_weight = $request->inp;
        if($vc->save()){
            return back()->with('success', 'แก้ไขการฉีดวัคซีนสำเร็จ');   
        }else{
            return back()->with('error', 'เกิดข้อผิดพลาด ลองอีกครั้ง');   
        }

    }

    public function delRecordVaccine(Request $request){
        $vc = vaccinate::find($request->id);
        $vc->active = 0;
        if($vc->save()){
            return back()->with('success', 'ลบการฉีดวัคซีนสำเร็จ');   
        }else{
            return back()->with('error', 'เกิดข้อผิดพลาด ลองอีกครั้ง');   
        }
    }

    public function getRecordWeight($id){

        $role = Auth::user()->role;
        if($role == 'user'){
            $weightes = body::where('chicken_id','=',$id)->where('bodytype_id',1)->where('active',1)->paginate(6);
            return view('chicken.record-weight',compact('id','weightes'));

        }else{
            return redirect('/');
        } 

    }

    public function editRecordWeight(Request $request){

        $weight = body::where('id',$request->id)->first();
        $weight->volume = $request->inp;
        if($weight->save()){
            return back()->with('success', 'แก้ไขน้ำหนักสำเร็จ');   
        }else{
            return back()->with('error', 'เกิดข้อผิดพลาด ลองอีกครั้ง');   
        }

    }

    public function delRecordWeight(Request $request){
        $wg = body::find($request->id);
        $wg->active = 0;
        if($wg->save()){
            return back()->with('success', 'ลบน้ำหนักสำเร็จ');   
        }else{
            return back()->with('error', 'เกิดข้อผิดพลาด ลองอีกครั้ง');   
        }
    }

    public function getRecordFeed($id){
        $role = Auth::user()->role;
        if($role == 'user'){

            return view('chicken.record-feed',compact('id'));

        }else{
            return redirect('/');
        } 
    }

    public function addChicken(){
        $role = Auth::user()->role;

        if($role == 'user'){
            $phases = chickenphase::all();
            $species = chickenspecie::all();
            $stalls = stall::all();
            return view('chicken.add-chicken',compact('species','stalls','phases'));
        }else{
            return redirect('/');
        }
    }

    public function saveAddChicken(Request $request){

        $request->validate([
            'id' => 'required',
            'type' => 'required',
            'species' => 'required',
            'born' => 'required',
        ]);

        $n = chicken::where('id',$request->id)->count();
        
        if($n > 0){
            return redirect('/chicken/add-chicken')->with('error', 'รหัสไก่พันธุ์ซ้ำ');
        }

        $chicken = new chicken;
        $chicken->id = $request->id;
        $chicken->birthday = $request->born;
        $chicken->chickenspecies_id = $request->species;
        $chicken->chicken_phase_id = $request->type;
        if($request->id_f == ''){
            $chicken->father_id = NULL;
        }else{
            $chicken->father_id = $request->id_f;
        }

        if($request->id_m == ''){
            $chicken->mother_id = NULL;
        }else{
            $chicken->mother_id = $request->id_m;
        }

        if($request->sexing == ''){
            $chicken->expect_sex = NULL;
        }else{
            $chicken->expect_sex = $request->sexing;
        }

        if($request->sex == ''){
            $chicken->sex = NULL;
        }else{
            $chicken->sex = $request->sex;
        }

        if($request->chatching == ''){
            $chicken->temp_born = NULL;
        }else{
            $chicken->temp_born = $request->chatching;
        }

        if($request->chatching == ''){
            $chicken->temp_born = NULL;
        }else{
            $chicken->temp_born = $request->chatching;
        }

        if($chicken->save()){
            return redirect('/chicken/add-chicken')->with('success', 'เพิ่มไก่พันธุ์สำเร็จ');   
        }else{
            return redirect('/chicken/add-chicken')->with('error', 'เกิดข้อผิดพลาด ลองใหม่อีกครั้ง');
        }
    }
}   
