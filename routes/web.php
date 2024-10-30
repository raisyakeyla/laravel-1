<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang',[BarangController::class, 'index']);
Route::get('/barang/tambah',[BarangController::class, 'create']);
Route::post('/barang/simpan',[BarangController::class, 'store']);
Route::get('/barang/{id}/show',[BarangController::class, 'show']);
Route::post('/barang/{id}/update',[BarangController::class, 'update']);
Route::get('/barang/{id}/destroy',[BarangController::class, 'destroy']);

Route::get('/jenis',[JenisController::class, 'index']);
Route::get('/jenis/tambah',[JenisController::class, 'create']);
Route::post('/jenis/simpan',[JenisController::class, 'store']);
Route::get('/jenis/{id}/show',[JenisController::class, 'show']);
Route::post('/jenis/{id}/update',[JenisController::class, 'update']);
Route::get('/jenis/{id}/destroy',[JenisController::class, 'destroy']);

