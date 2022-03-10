<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/',[IndexAPIController::class,'index']);

Route::get('/crud',[IndexAPIController::class,'crud']);
Route::post('/crud',[IndexAPIController::class,'store']);
Route::get('/crud/{id}',[IndexAPIController::class,'show']);
Route::put('/crud/{id}',[IndexAPIController::class,'update']);
// Route::get('/crud/{id}/delete',[IndexAPIController::class,'destroy']);
Route::delete('/crud/{id}',[IndexAPIController::class,'destroy']);
