<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/',[IndexController::class,'index']);
Route::get('/crud',[IndexController::class,'crud']);
Route::get('/crud/create',[IndexController::class,'create']);
Route::post('/crud',[IndexController::class,'store']);
Route::get('/crud/{id}/edit',[IndexController::class,'edit']);
Route::put('/crud/{id}',[IndexController::class,'update']);
Route::get('/crud/{id}/delete',[IndexController::class,'destroy']);
// Route::delete('/crud/{id}',[IndexController::class,'destroy']);