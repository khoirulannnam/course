<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SchemeController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/skemakursus/{id}', [HomeController::class, 'skemakursus']);
Route::get('/riwayatkursus', [HomeController::class, 'riwayatkursus']);
Route::get('/daftarkursus', [HomeController::class, 'daftarkursus']);
Route::post('/daftar', [HomeController::class, 'daftar']);
Route::get('/print/{id}',[HomeController::class,'print'])->name('printappoint');

Route::get('/skema', [AdminController::class, 'skema']);
Route::post('/tambahskema', [AdminController::class, 'tambahskema']);
Route::get('/hapusskema/{id}', [AdminController::class, 'hapusskema']);
Route::get('/jadwal', [AdminController::class, 'jadwal']);
Route::post('/tambahjadwal', [AdminController::class, 'tambahjadwal']);
Route::get('/hapusjadwal/{id}', [AdminController::class, 'hapusjadwal']);
Route::get('/permohonan', [AdminController::class, 'permohonan']);
Route::get('/daftarmahasiswa', [AdminController::class, 'daftarmahasiswa']);
Route::get('/verifikasi/{id}',[AdminController::class,'verifikasi']);
Route::get('/hapususer/{id}',[AdminController::class,'hapususer']);
Route::get('/konfirmasi/{id}',[AdminController::class,'konfirmasi']);
