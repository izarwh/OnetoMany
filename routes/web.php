<?php

use App\Http\Controllers\DesaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('welcome');
});
Route::get('/daerah/provinsi/list',[ProvinsiController::class,'index']) ->name('indexprovinsi');
Route::get('/daerah/kota/list',[KotaController::class,'index']) ->name('indexkota');
Route::get('/',[DesaController::class,'index']) ->name('indexdesa');
Route::get('/daerah/desa/delete/{id}',[DesaController::class,'destroy'])->name('deletedesa');
Route::get('/daerah/desa/create',[DesaController::class,'create'])->name('createdesa');
Route::post('/daerah/desa/input',[DesaController::class,'store'])->name('inputdesa');
Route::get('/daerah/desa/edit/{id}',[DesaController::class,'edit'])->name('editdesa');
Route::post('/daerah/desa/update/{id}',[DesaController::class,'update'])->name('updatedesa');
Route::get('/daerah/export_excel',[DesaController::class,'export_excel'])->name('exportexcel');
Route::get('/daerah/export_pdf',[DesaController::class,'export_pdf']) ->name('exportpdf');