<?php

use Illuminate\Support\Facades\Route;

Route::get('entrar', function(){
    return "Autorizado";
})->middleware('checkage');

Route::get("no-autorizado", function(){
    return "no autorizado";
})->name("no-autorizado");

Route::middleware('checkage')->group(function(){

    Route::get('hola/{id?}', ['App\Http\Controllers\userController', 'index']);
    
    Route::get('posts/{post}', function($post){
        return "Aqui se mostrara el post {$post}";
    });
    
    //Route::resource('autores',App\Http\Controllers\autoresController::class);
    Route::resources([
        'autores'=> App\Http\Controllers\autoresController::class,
        'tiendas'=> App\Http\Controllers\tiendasController::class,
        'libros'=> App\Http\Controllers\librosController::class
    ]);
    
    Route::view('/welcome', 'welcome', ['name'=> "Yohanna"]);
});