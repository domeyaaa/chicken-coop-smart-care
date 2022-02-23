<?php

use App\Http\Controllers\ChickenSpecieController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StallController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\ChickenController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\SensorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\vaccine;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// ---------------------------------frontend--------------------------------
Route::middleware(['auth:sanctum', 'verified'])->get('home',[HomeController::class,'home']);

Route::middleware(['auth:sanctum', 'verified'])->get('menu',[HomeController::class,'menu']);

Route::middleware(['auth:sanctum', 'verified'])->get('check-egg',[HomeController::class,'checkegg']);

Route::middleware(['auth:sanctum', 'verified'])->get('breed-egg',[HomeController::class,'breedegg']);

Route::middleware(['auth:sanctum', 'verified'])->get('all-user',[ManageUserController::class,'allUser']);

Route::middleware(['auth:sanctum', 'verified'])->get('manage-specie',[ChickenSpecieController::class,'manageSpecie']);

Route::middleware(['auth:sanctum', 'verified'])->get('manage-coop',[StallController::class,'manageCoop']);

Route::middleware(['auth:sanctum', 'verified'])->get('manage-food',[FoodController::class,'manageFood']);

Route::middleware(['auth:sanctum', 'verified'])->get('manage-vaccine',[VaccineController::class,'manageVaccine']);

//หน้าไก่ทั้งหมด
Route::middleware(['auth:sanctum', 'verified'])->get('chicken/all',[ChickenController::class,'allChicken']);

//หน้าข้อมูลไก่รายตัว
Route::middleware(['auth:sanctum', 'verified'])->get('chicken/information/{id}',[ChickenController::class,'dataChicken']);

//-------------------------------backend------------------------------------

//ส่งค่า sensor
Route::get('send-data-sensor',[SensorController::class,'sendDataSensor']);

//หน้าตั้งรหัสผ่านใหม่
Route::get('new-password',[NewPasswordController::class,'newPassword']);

//หน้า กรอก otp
Route::get('verify',[NewPasswordController::class,'verification']);

//หน้า ลืมรหัสผ่าน
Route::get('forget-password',[NewPasswordController::class,'index']);

//สมัคร
Route::post('save-user',[RegisterController::class,'register']);

//เพิ่มสายพันธุ์ไก่
Route::post('save-specie',[ChickenSpecieController::class,'saveSpecie']);

//เพิ่มคอก
Route::post('save-stall',[StallController::class,'saveStall']);

//เพิ่มอาหาร
Route::post('save-food',[FoodController::class,'saveFood']);

//เพิ่มวัคซีน
Route::post('save-vaccine',[VaccineController::class,'saveVaccine']);

//แก้ไขสายพันธุ์ไก่
Route::post('edit-specie',[ChickenSpecieController::class,
'editSpecie']);

//แก้ไขคอก
Route::post('edit-stall',[StallController::class,'editStall']);

//แก้ไขอาหาร
Route::post('edit-food',[FoodController::class,'editFood']);

//แก้ไขวัคซีน
Route::post('edit-vaccine',[VaccineController::class,'editVaccine']);

//ลบสายพันธุ์ไก่
Route::get('delete-specie',[ChickenSpecieController::class,'delSpecie']);

//ลบคอก
Route::get('delete-stall',[StallController::class,'delStall']);

//ลบอาหาร 
Route::get('delete-food',[FoodController::class,'delFood']);

//ลบวัคซีน
Route::get('delete-vaccine',[VaccineController::class,'delVaccine']);

//อนุมัติบัญชีผู้ใช้
Route::post('active-user',[ManageUserController::class,'activeUser']);

//ส่ง otp 
Route::get('send-otp',[NewPasswordController::class,'sendOtp']);

//เช็ค OTP
Route::post('check-otp',[NewPasswordController::class,'checkOtp']);

//บันทึกรหัสผ่านใหม่
Route::post('save-new-password',[NewPasswordController::class,'saveNewPassword']);