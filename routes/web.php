<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/',[WelcomeController::class,'index']);
Route::get('/index',[IndexController::class,'index']);
Route::get('/parameter/{id}',[IndexController::class,'mndex']);
Route::get('/tests',[TestController::class,'mnx']);
Route::get('/test/{id}',[TestController::class,'display']);