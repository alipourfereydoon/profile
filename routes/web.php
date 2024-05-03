<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::get('user/index',[UserController::class,'index'])->name('index');
Route::get('user/create',[UserController::class,'create'])->name('create');
Route::get('user/edit/{id}',[UserController::class,'edit'])->name('edit');
Route::get('user/show/{id}',[UserController::class,'show'])->name('show');
Route::post('user/store',[UserController::class,'store'])->name('store');
Route::delete('user/delete',[UserController::class, 'destroy'])->name('profile');

Route::get('/onton',[homecontroller::class,'index']);
// Route::get('/showuser/{id}',[homecontroller::class,'showuser']);
Route::get('/', function () {
    return view('/post/main');
})->name('main');

Route::get('/error',function(){
    return view('welcome');
});

Route::post('send',[homecontroller::class,'index']);
