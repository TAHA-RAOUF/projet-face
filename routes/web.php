<?php

use App\Http\Controllers\facecontroller;
use App\Http\Controllers\inscriptioncontroller;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\resetcontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/Home', function () {
    return view('welcome');
});
Route::view('/{path}','welcome');
Route::resource('facebookers',facecontroller::class);
Route::post('facebookers',[resetcontroller::class,'store']);


Route::get('/passwordreset',[ResetPasswordController::class,'reset']);

Route::get('/reset',function(){
    return view('resetpassword');
});

Route::get('/inscription',[inscriptioncontroller::class,'inscription']);