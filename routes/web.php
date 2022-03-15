<?php

use App\Http\Controllers\MasterClassController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubClassController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [ProductController::class,'index']);
Route::get('/create', [ProductController::class,'createProduct']);
Route::post('/store',[ProductController::class,'storeProduct']);
Route::get('/{productID}/edit', [ProductController::class,'edit']);
Route::post('/{productID}/update',[ProductController::class,'update']);
Route::get('/{productID}/delete',[ProductController::class,'delete']);

Route::get('/master-class',[MasterClassController::class, 'index']);
Route::get('/master-class/create',[MasterClassController::class, 'create']);
Route::post('/master-class/store',[MasterClassController::class, 'store']);

Route::get('/{masterClassID}/sub-class',[SubClassController::class,'index']);
Route::get('/{masterClassID}/sub-class/create',[SubClassController::class,'create']);
Route::post('/{masterClassID}/sub-class/store',[SubClassController::class,'store']);


