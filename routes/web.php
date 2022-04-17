<?php

use App\Http\Controllers\BreedController;
use App\Http\Controllers\CheckEggController;
use App\Http\Controllers\ChickenSpecieController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StallController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\ChickenController;
use App\Http\Controllers\ComparisonController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\PhaseController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SexingController;
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
//หน้าหลัก
Route::middleware(['auth:sanctum', 'verified'])->get('home',[HomeController::class,'home']);

//หน้าเมนู
Route::middleware(['auth:sanctum', 'verified'])->get('menu',[HomeController::class,'menu']);

//หน้าบันทึกการให้ไข่
Route::middleware(['auth:sanctum', 'verified'])->get('check-egg',[CheckEggController::class,'index']);

//หน้าไข่มีเชื้อ
Route::middleware(['auth:sanctum', 'verified'])->get('breed-egg',[HomeController::class,'breedegg']);

//หน้าผู้ใช้ทั้งหมด
Route::middleware(['auth:sanctum', 'verified'])->get('all-user',[ManageUserController::class,'allUser']);

Route::middleware(['auth:sanctum', 'verified'])->get('manage-specie',[ChickenSpecieController::class,'manageSpecie']);

Route::middleware(['auth:sanctum', 'verified'])->get('manage-coop',[StallController::class,'manageCoop']);

Route::middleware(['auth:sanctum', 'verified'])->get('manage-food',[FoodController::class,'manageFood']);

Route::middleware(['auth:sanctum', 'verified'])->get('manage-vaccine',[VaccineController::class,'manageVaccine']);

//หน้าจัดการระยะเติบโต
Route::middleware(['auth:sanctum', 'verified'])->get('manage-phase',[PhaseController::class,'managePhase']);

//หน้าไก่ทั้งหมด
Route::middleware(['auth:sanctum', 'verified'])->get('chicken/all',[ChickenController::class,'allChicken']);

//หน้าข้อมูลไก่รายตัว
Route::middleware(['auth:sanctum', 'verified'])->get('chicken/information/{id}',[ChickenController::class,'dataChicken']);

//หน้าตั้งค่าโปรไฟล์
Route::middleware(['auth:sanctum', 'verified'])->get('setting',[SettingController::class,'getProfile']);

//หน้าประวัติขนาดตัว
Route::middleware(['auth:sanctum', 'verified'])->get('chicken/information/{id}/record-body-size',[ChickenController::class,'getRecordBodySize']);

//หน้าบันทึกคู่ผสมพันธุ์
Route::middleware(['auth:sanctum', 'verified'])->get('chicken/information/{id}/record-breed',[ChickenController::class,'getRecordBreed']);

//หน้าบันทึกการให้ไข่
Route::middleware(['auth:sanctum', 'verified'])->get('chicken/information/{id}/record-egg',[ChickenController::class,'getRecordEgg']);

//หน้าบันทึกวัคซีน
Route::middleware(['auth:sanctum', 'verified'])->get('chicken/information/{id}/record-vaccine',[ChickenController::class,'getRecordVaccine']);

//หน้าบันทึกน้ำหนัก
Route::middleware(['auth:sanctum', 'verified'])->get('chicken/information/{id}/record-weight',[ChickenController::class,'getRecordWeight']);

//หน้าบันทึกการให้อาหาร
Route::middleware(['auth:sanctum', 'verified'])->get('chicken/information/{id}/record-feed',[ChickenController::class,'getRecordFeed']);

//หน้าทำนายเพศ
Route::middleware(['auth:sanctum', 'verified'])->get('sexing',[SexingController::class,'index']);

//หน้าตั้งรหัสผ่านใหม่
Route::get('new-password',[NewPasswordController::class,'newPassword']);

//หน้า กรอก otp
Route::get('verify',[NewPasswordController::class,'verification']);

//หน้า ลืมรหัสผ่าน
Route::get('forget-password',[NewPasswordController::class,'index']);

//link reset password From
Route::get('/password/reset/{token}',[NewPasswordController::class,'newPasswordForm'])->name('reset.password.form');

//หน้าเพิ่มไก่พันธุ์
Route::middleware(['auth:sanctum', 'verified'])->get('/chicken/add-chicken',[ChickenController::class,'addChicken']);

//หน้ารายงาน
Route::middleware(['auth:sanctum', 'verified'])->get('/report',[ReportController::class,'index']);

//หน้าจับคู่ผสมพันธุ์
Route::middleware(['auth:sanctum', 'verified'])->get('/breed',[BreedController::class,'index']);

//หน้าเปรียนเทียบการให้ผลผลิต
Route::middleware(['auth:sanctum', 'verified'])->get('/compare-yield',[ComparisonController::class,'index']);

//ผลการเปรียบเทียบการให้ผลผลิต
Route::middleware(['auth:sanctum', 'verified'])->get('/compare-yield-result',[ComparisonController::class,'result']);

// -------------------------------backend------------------------------------

//ส่ง link reset password
Route::post('/send-reset-link',[NewPasswordController::class,'sendResetLink']);

//save reset password
Route::post('/save-reset-password',[NewPasswordController::class,'resetPassword']);

//ส่งค่า sensor Middle
Route::get('send-data-sensor',[SensorController::class,'sendDataSensor']);

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

//บันทึกรหัสผ่านใหม่ กรณีลืมรหัสผ่าน
Route::post('save-new-password',[NewPasswordController::class,'saveNewPassword']);

//บันทึกการแก้ไขโปรไฟล์
Route::post('save-edit-profile',[SettingController::class,'saveEditProfile']);

//บันทึกรหัสผ่านใหม่ในการตั้งค่า
Route::post('save-password-profile',[SettingController::class,'saveNewPassword']);

//เพิ่มระยะเติบโต
Route::post('save-phase',[PhaseController::class,'savePhase']);

//แก้ไขระยะเติบโต
Route::post('edit-phase',[PhaseController::class,'editPhase']);

//ลบระยะเติบโต
Route::get('delete-phase',[PhaseController::class,'delPhase']);

//บันทึกไก่พันธุ์
Route::post('add-new-chicken',[ChickenController::class,'saveAddChicken']);

//แก้ไขน้ำหนัก
Route::post('save-edit-record-weight',[ChickenController::class,'editRecordWeight']);

//ลบน้ำหนัก
Route::get('del-record-weight',[ChickenController::class,'delRecordWeight']);

//แก้ไขการฉีดวัคซีน
Route::post('save-edit-record-vaccine',[ChickenController::class,'editRecordVaccine']);

//ลบการฉีดวัคซีน
Route::get('del-record-vaccine',[ChickenController::class,'delRecordVaccine']);

//แก้ไขคู่ผสมพันธฺุ์
Route::post('save-edit-record-breed',[ChickenController::class,'editRecordBreed']);

//คู่ผสมพันธฺุ์
Route::get('del-record-breed',[ChickenController::class,'delRecordBreed']);

