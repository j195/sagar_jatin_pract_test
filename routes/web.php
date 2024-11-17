<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ModelController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/brands', [App\Http\Controllers\BrandController::class, 'index'])->name('brands');
Route::resource('brands', BrandController::class);

Route::resource('models', ModelController::class);
