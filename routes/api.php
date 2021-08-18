<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AuthController;

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

//Public Routes

Route::get('/contactform',[ContactFormController::class,'index']);
Route::get('/contactform/{id}',[ContactFormController::class,'show']);
Route::post('/contactform',[ContactFormController::class,'store']);

Route::get('/items',[ItemController::class,'index']);
Route::get('/items/trending',[ItemController::class,'Trending']);
Route::get('/items/{id}',[ItemController::class,'show']);


Route::get('/category',[CategoriesController::class,'index']); 
Route::get('/category/{id}',[CategoriesController::class,'show']);

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Put Routes you want to protect in this function
//Protected Routes
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::put('/contactform/{id}',[ContactFormController::class,'update']);
    Route::delete('/contactform/{id}',[ContactFormController::class,'delete']);
    Route::put('/items/{id}',[ItemController::class,'update']);
    Route::delete('/items/{id}',[ItemController::class,'delete']);
    Route::post('/items',[ItemController::class,'store']);
    Route::put('/category/{id}',[CategoriesController::class,'update']);
    Route::delete('/category/{id}',[CategoriesController::class,'delete']);
    Route::post('/category',[CategoriesController::class,'store']);
    Route::post('/logout',[AuthController::class,'logout']);
});