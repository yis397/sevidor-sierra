<?php

use App\Http\Controllers\Api\PuebloController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=>"apikey.validate"],function(){
    Route::get('pueblos',[PuebloController::class,'index']);
    Route::get('pueblos/{pueblo}',[PuebloController::class,'show']);
    Route::post('pueblos/img',[PuebloController::class,'storeI']);
    Route::post('pueblos/act',[PuebloController::class,'storeA']);
});
