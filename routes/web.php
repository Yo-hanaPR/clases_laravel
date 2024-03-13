<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;

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

Route::get('/ruta', [App\Http\Controllers\HolaController::class,'index']);


Route::post('/store', [App\Http\Controllers\HolaController::class,'store'])->name('store');
Route::get('/listado',[App\Http\Controllers\HolaController::class,'listado']);

Route::post('/operaciones', [App\Http\Controllers\HolaController::class,'operaciones'])->name('operaciones');
Route::get('saludo/{nombre}', function ($nombre)
{

    return view('saludo',compact('nombre'));
});
