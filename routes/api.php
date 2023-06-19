<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\DetailController;
use App\Http\Controllers\Api\DashboardController;






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

Route::group(['middleware' => 'auth:sanctum'], function () {

// review question 
Route::POST('review',[DetailController::class,'property_review']);

// dashboard 
Route::get('reviewed_property',[DashboardController::class,'reviewed']);
Route::get('invested_property',[DashboardController::class,'invested']);


});






// Auth 
Route::POST('register',[AuthController::class,'register']);
Route::POST('login',[AuthController::class,'login']);

Route::get('user/{id}',[UserController::class,'user']);

// property 
Route::get('properties',[HomeController::class,'properties']); 
Route::get('hot-properties',[HomeController::class,'hot_property']);


// property Detail 
Route::get('property_detail/{id}',[DetailController::class,'propertyDetail']);








