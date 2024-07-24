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
        
        //$mail=libros::where("nombre","like","%lUna%")->first()->autor->email;
        $autores= autores::all();
        

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
        return view("lista_autores", compact('autores','products', 'condicion') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crear_nuevo_autor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        Autores::create([
            'nombre'=> $request['nombre'],
            'apellido'=> $request['apellido'],
            'email'=>$request['email'],
            'teléfono'=>$request['teléfono'],
        ]);

        return redirect()->route('autores.index')->with('success','El autor se guardó con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //$autor= autores::where('id',$id)->first();
        $autor= Autores::find($id)->first();
        return view('detalle_autor', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // layouts.app
        $autor= Autores::find($id)->first();
        return view('editar_autor', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //dd($request);
        $autor= Autores::find($id)->first();
        $autor->update($request->all());
        return redirect()->route('autores.index')->with('updated','El autor se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
        Autores::find($id)->delete();
        return redirect()->route('autores.index')->with('eliminado','El autor se eliminó con éxito');
    }
}
