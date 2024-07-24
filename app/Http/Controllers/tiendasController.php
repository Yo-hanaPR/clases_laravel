<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiendas;

class tiendasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tiendas= Tiendas::all();
        return view('listado_tiendas', compact('tiendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crear_nueva_tienda'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
               //dd($request);
               Tiendas::create([
                'nombre'=> $request['nombre'],
                'rif'=> $request['rif'],
                'direccion'=>$request['direccion'],
                ]);
    
            return redirect()->route('tiendas.index')->with('success','La tienda creó con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tienda= Tiendas::find($id)->first();
        return view('detalle_tienda', compact('tienda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //dd($tienda);
       
        $tienda= Tiendas::where('id',$id)->first();
        
        return view('editar_tienda', compact('tienda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request);tienda
        
        $tienda= Tiendas::where('id',$id)->first();
        $tienda->update($request->all());
        return redirect()->route('tiendas.index')->with('success','La tienda se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Tiendas::where('id',$id)->delete();
        return redirect()->route('tiendas.index')->with('eliminado','La tienda se eliminó con éxito');
    }
}
