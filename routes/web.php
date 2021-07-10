<?php

use App\Http\Controllers\home;
use App\Http\Controllers\login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PerusahaanController;

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


Route::get('/',[home::class, 'index'])->name ('home')->middleware('auth');
Route::get('/log/myaccount',[home::class, 'myaccount'])->name ('myaccount')->middleware('auth');
Route::get('/log/myaccountk',[home::class, 'myaccountk'])->name ('myaccountk')->middleware('auth');
Route::get('/log/myaccountd',[home::class, 'myaccountd'])->name ('myaccountd')->middleware('auth');

Route::get('/karyawan',[KaryawanController::class, 'index'])->name ('karyawan')->middleware('auth');
Route::get('/insert',[KaryawanController::class, 'insert'])->name ('insert')->middleware('auth');
Route::post('/insertpost',[KaryawanController::class, 'insertpost'])->name ('insertpost')->middleware('auth');
Route::get('/show/{id}',[KaryawanController::class, 'show'])->name ('show')->middleware('auth');
Route::get('/changeupdate/{id}',[KaryawanController::class, 'changeupdate'])->name ('changeupdate')->middleware('auth');
Route::post('/update/{id}',[KaryawanController::class, 'update'])->name ('update')->middleware('auth');
Route::get('/delete/{id}',[KaryawanController::class, 'delete'])->name ('delete')->middleware('auth');

Route::get('/perusahaan/perusahaan',[PerusahaanController::class, 'index'])->name ('perusahaan')->middleware('auth');
Route::get('/perusahaan/insertp',[PerusahaanController::class, 'insertp'])->name ('insertp')->middleware('auth');
Route::post('/perusahaan/insertppost',[PerusahaanController::class, 'insertppost'])->name ('insertppost')->middleware('auth');
Route::get('/perusahaan/showp/{id}',[PerusahaanController::class, 'showp'])->name ('showp')->middleware('auth');
Route::get('/perusahaan/changeupdatep/{id}',[PerusahaanController::class, 'changeupdatep'])->name ('changeupdatep')->middleware('auth');
Route::post('/perusahaan/update/{id}',[PerusahaanController::class, 'updatep'])->name ('updatep')->middleware('auth');
Route::get('/perusahaan/deletes/{id}',[PerusahaanController::class, 'deletes'])->name ('deletes')->middleware('auth');


Route::get('/log/login',[login::class, 'login'])->name ('login');
Route::post('/log/loginpost',[login::class, 'loginpost'])->name ('loginpost');
Route::get('/log/register',[login::class, 'register'])->name ('register');
Route::post('/log/registeruser',[login::class, 'registeruser']);//->name ('registeruser');
Route::get('/log/logout',[login::class, 'logout'])->name ('logout');

//Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
//Route::get('profile', function () {
    // Only verified users may enter...
//})->middleware('verified');



