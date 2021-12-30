<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class,'home']);
Route::get('/view',[ProductController::class,'view']);

//register
Route::get('/register',[RegisterController::class,'go']);
Route::post('/register',[RegisterController::class,'register']);

//login
Route::get('/login',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'createLogin']);

//auth
Route::get('/logout',[LoginController::class,'logout']);

//admin
Route::get('/add-product',[ProductController::class,'create']);
Route::post('/add-product',[ProductController::class,'store']);
Route::get('/update/{id}',[ProductController::class,'getOldData']);
Route::post('/update/{id}',[ProductController::class,'update']);



Route::get('/delete/{id}',[ProductController::class,'delete']);
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::get('/profile-detail/{id}',[LoginController::class,'profileDetail']);

Route::get('/profile-update/{id}',[LoginController::class,'oldProfile']);
Route::post('/profile-update/{id}',[LoginController::class,'updateProfile']);





// Route::any('/', function () {
//     //
// });