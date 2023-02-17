<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ProductController::class, 'index']);

Route::get('show-product/{id}', [ProductController::class, 'show']);

Route::post('storeProduct', [ProductController::class, 'store']);

Route::post('storeProductDashboard', [ProductController::class, 'storeProduct']);
 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('showProductDashboard/{id}', [HomeController::class, 'showProduct']);

Route::post('updateProductDashboard', [HomeController::class, 'updateProduct']);

Route::post('destroyProduct/{id}', [HomeController::class, 'destroyProduct']);



Route::post('store-user', [UserController::class, 'storeUser']);
Route::get('update-user/{id}', [UserController::class, 'updateUser']);
Route::post('actualizar-usuario/{id}', [UserController::class, 'updateUserId']);
Route::post('delete-user', [UserController::class, 'deleteUser']);
Route::get('/index', [App\Http\Controllers\UserController::class, 'index'])->name('index');
 
Route::get('/pdf', [App\Http\Controllers\UserController::class, 'pdf'])->name('pdf');



 
 