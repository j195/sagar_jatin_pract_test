<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BrandController;
use Illuminate\Routing\Router;
use App\Http\Controllers\API\RegisterController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});

/*Route::controller(BrandController::class)->group(function(){
    Route::get('brands', 'index');
});*/

Route::middleware('auth:sanctum')->group( function () {
    Route::get('brands/details', 'App\Http\Controllers\API\BrandController@brandDetails');
    Route::resource('brands', BrandController::class);
});
