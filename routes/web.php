<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\siswa\SiswaController;

Route::get('/',[SiswaController::class,'index'])->name('/');
Route::get('siswa',[SiswaController::class,'index'])->name('siswa');
Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('tambahm',[SiswaController::class,'tambahm'])->name('tambahm');
Route::post('tambahm.savem',[SiswaController::class, 'savem'])->name('savem');
Route::get('editm.data/{id}',[SiswaController::class, 'editm'])->name('editm');
Route::post('updatem.data/{id}',[SiswaController::class, 'updatem'])->name('updatem');
Route::get('hapusm.data/{id}',[SiswaController::class, 'hapusm'])->name('hapusm');

Route::get('tambah',[HomeController::class,'tambah'])->name('tambah');
Route::post('tambahm.save',[HomeController::class, 'save'])->name('save');
Route::get('edit.data/{id}',[HomeController::class, 'edit'])->name('edit');
Route::post('update.data/{id}',[HomeController::class, 'update'])->name('update');
Route::get('hapus.data/{id}',[HomeController::class, 'hapus'])->name('hapus');


