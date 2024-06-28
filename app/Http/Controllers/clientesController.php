<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(    )
    {
        //
        
        $clientes= [
            ['name'=> 'Jose', 'apellido'=>'padrino', 'activo'=>true],
            ['name'=> 'Yohanna', 'apellido'=>'padrino','activo'=>false],
            ['name'=> 'Yanluis', 'apellido'=>'laya', 'activo'=>true],
            ['name'=> 'Fulano', 'apellido'=>'detal', 'activo'=>true]
        ];
        $clientes_total=count($clientes); //dd($clientes_total);
        return view('clientes', compact('clientes' , 'clientes_total')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $name='Yanluis';
        return view ('create_clientes', compact('name'));
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
