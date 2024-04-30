<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;

use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['is_admin'])->group(function(){});
Route::get('/',[Admincontroller::class,'index'])->name('user.home');

Route::get('layout', function () {
    return view('finexo-html.layout');
});

Route::get('about',[Admincontroller::class,'about']);

Route::get('service',[Admincontroller::class,'service']);

Route::get('team',[Admincontroller::class,'team']);

Route::get('why',[Admincontroller::class,'why']);

Route::get('aaa',);

Route::get('bbb',);

//เพิ่ม comment
Route::get('comment',[Admincontroller::class,'comment']);
Route::post('insertcomment',[Admincontroller::class,'insertcomment']);
// adminไม่ใช้
Route::get('indexadmin',[Admincontroller::class,'indexadmin']);// ไม่ใช้

Route::get('tables',[Admincontroller::class,'tables']);

Route::get('tables_copy',[Admincontroller::class,'tables_copy']);
// profile admin

Route::get('profile_edit/{id}',[Admincontroller::class,'profile_edit'])->name('profile_edit');
Route::post('updateprofile_edit/{id}',[Admincontroller::class,'updateprofile_edit'])->name('updateprofile_edit');


Route::get('profile_data',[Admincontroller::class,'profile_data']);

// Login1
Route::get('login',[Admincontroller::class,'login']);

Route::get('sign_In',[Admincontroller::class,'sign_In']);

//adds user
Route::get('admin_adds_user',[Admincontroller::class,'adds_user']);
Route::post('insert',[Admincontroller::class,'insert']);

//
Route::get('problem',[Admincontroller::class,'problem']);
//
Route::get('EstimatePrice',[Admincontroller::class,'EstimatePrice']);
//
Route::get('repair',[Admincontroller::class,'repair']);

//Edit
Route::get('admin_edit_user/{id}',[Admincontroller::class,'edit_user'])->name('admin_edit_user');
Route::post('update/{id}',[Admincontroller::class,'update'])->name('update') ;
Auth::routes();

//ลบข้อมูลลูกค้า
Route::get('delete/{id}', [AdminController::class,'delete'])->name('delete');


Route::get('/home', [HomeController::class, 'index'])->name('home');

// login
Route::get('admin/home',[HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');




//-----------------------------//dashboarduser

Route::get('dashboard', [Admincontroller::class, 'dashboarduser'])->name('dashboard');
Route::get('slip/{id}', [Admincontroller::class, 'slip'])->name('slip');
Route::post('updateslip/{id}',[Admincontroller::class,'updateslip'])->name('updateslip');

//-----------------------------//dashboarduser

