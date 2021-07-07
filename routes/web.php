<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
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
    return view('welcome');
});

Route::get('/karyawan',[KaryawanController::class, 'index'])->name ('karyawan');
Route::get('/insert',[KaryawanController::class, 'insert'])->name ('insert');
Route::post('/insertpost',[KaryawanController::class, 'insertpost'])->name ('insertpost');
Route::get('/show/{id}',[KaryawanController::class, 'show'])->name ('show');
Route::get('/changeupdate/{id}',[KaryawanController::class, 'changeupdate'])->name ('changeupdate');
Route::post('/update/{id}',[KaryawanController::class, 'update'])->name ('update');
Route::get('/delete/{id}',[KaryawanController::class, 'delete'])->name ('delete');