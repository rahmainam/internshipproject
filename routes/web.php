<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactDetails;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ItemController;

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


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function(){
//     return view('home');
// });


Route::get('/admin', function(){
    return view('home');
});

Route::get('/admin',[ItemController::class, 'Trending'])->name('trending_items');
Route::get('/admin/items/delete/{id}',[ItemController::class, 'delete']);
Route::get('/admin/items',[ItemController::class, 'index'])->name('item_categories');
Route::get('/admin/items/edit/{id}',[ItemController::class, 'edit']);
Route::post('/admin/items/edit',[ItemController::class, 'update']);
Route::get('/admin/items/crud',[ItemController::class, 'index1']);
Route::resource('/admin/items',ItemController::class);



Route::get('/admin/categories',[CategoriesController::class, 'index']);
Route::get('/admin/categories/delete/{id}',[CategoriesController::class, 'delete']);
Route::get('/admin/categories/crud',[CategoriesController::class, 'crudCategories']);
Route::post('/admin/categories/edit',[CategoriesController::class, 'update']);
Route::get('/admin/categories/edit/{id}',[CategoriesController::class, 'edit']);
Route::resource('/admin/categories',CategoriesController::class);



Route::get('/admin/contactform',[ContactFormController::class, 'index']);
Route::post('/admin/contactform/edit',[ContactFormController::class, 'update']);
Route::get('/admin/contactform/delete/{id}',[ContactFormController::class, 'delete']);
Route::get('/admin/contactform/edit/{id}',[ContactFormController::class, 'show']);
Route::get('/admin/contactform/crud',[ContactFormController::class, 'index1']);
Route::resource('/admin/contactform',ContactFormController::class);
Auth::routes();
