<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;

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

// Route::get('/data',[InventarisController::class,'data']);
// Route::get('/login',[InventarisController::class,'login']);
Route::get('/views',[InventarisController::class,'views']);
Route::post('/creat',[InventarisController::class,'creat']);
Route::get('/simpan',[InventarisController::class,'simpan']);
Route::get('/read',[InventarisController::class,'read']);
Route::get('/update/{id}',[InventarisController::class,'update'])->name('update.data');
Route::get('/delete',[InventarisController::class,'delete']);