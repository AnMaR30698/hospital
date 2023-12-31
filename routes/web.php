<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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


Route::get('/home', [HomeController::class,'redirect'])->name('dashboard');
Route::get('/', [HomeController::class,'index']);
Route::get('/add_doctor_view', [AdminController::class,'add_view']);
Route::post('/upload_doctor', [AdminController::class,'upload']);
Route::post('/appointment', [HomeController::class,'appointment']);
Route::get('/myappointment', [HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}', [HomeController::class,'cancel_appoint']);
Route::get('/showappointment', [AdminController::class,'showappointment']);
Route::get('/approved/{id}', [AdminController::class,'approved']);
Route::get('/canceled/{id}', [AdminController::class,'canceled']);
Route::get('/showdoctors', [AdminController::class,'showdoctors']);
Route::get('/delete_doctor/{id}', [AdminController::class,'delete_doctor']);
Route::get('/update_doctor/{id}', [AdminController::class,'update_doctor']);
Route::post('/edit_doctor/{id}', [AdminController::class,'edit_doctor']);



// Route::get('/home',
//        function () {
//     return view('admin.home');}
//        );

