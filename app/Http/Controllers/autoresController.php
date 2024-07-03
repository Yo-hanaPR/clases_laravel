<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\autores;
use App\Models\libros;

class autoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $mail=libros::where("nombre","like","%lUna%")->first()->autor->email;
        $autores= [
            ['name'=> 'Jose', 'apellido'=>'padrino'],
            ['name'=> 'Yohanna', 'apellido'=>'padrino'],
            ['name'=> 'Yanluis', 'apellido'=>'laya']
        ];

        $products= [
            [
                'nombre'=> "Teléfono", 
                'precio'=>'460', 
                'specs'=> [' color'=>'rojo', 'tamaño'=>'grande', 'camara'=>'12MP']
            ],

            [
                'nombre'=> "Teléfono", 
                'precio'=>'460', 
                'specs'=> [' color'=>'rojo', 'tamaño'=>'grande', 'camara'=>'12MP']
            ],
            [
                'nombre'=> "Teléfono", 
                'precio'=>'460', 
                'specs'=> [' color'=>'rojo', 'tamaño'=>'grande', 'camara'=>'12MP']
            ]
            ,
            [
                'nombre'=> "Teléfono", 
                'precio'=>'460', 
                'specs'=> [' color'=>'rojo', 'tamaño'=>'grande', 'camara'=>'12MP']
            ],
            [
                'nombre'=> "Teléfono", 
                'precio'=>'460', 
                'specs'=> [' color'=>'rojo', 'tamaño'=>'grande', 'camara'=>'12MP']
            ]
        ];
        

        $condicion= true; /**Valor booleano para ver los condicionales de blade*/
        return view("lista_autores", compact('autores','products', 'condicion','mail') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
