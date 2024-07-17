<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','checkage'])->name('dashboard');

Route::get('no-autorizado', function(){
    return "No autorizado";
})->name('no-autorizado');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('autores',App\Http\Controllers\autoresController::class); 
    Route::resource('tiendas',App\Http\Controllers\tiendasController::class); 
});

require __DIR__.'/auth.php';
