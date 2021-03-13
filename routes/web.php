<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[App\Http\Controllers\PesanController::class,'index'])->name('home');
Route::get('/pesan',[App\Http\Controllers\PesanController::class,'create'])->name('pesan');
Route::post('/simpan',[App\Http\Controllers\PesanController::class,'store'])->name('simpan');
Route::get('/pesanan',[App\Http\Controllers\PesanController::class,'show'])->name('tampil');
Route::get('/makasih',[App\Http\Controllers\PesanController::class,'makasih'])->name('makasih');