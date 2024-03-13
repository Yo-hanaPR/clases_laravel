<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class HolaController extends Controller
{
    //
    public function operaciones(Request $request){
        
        if($request->operacion == 'suma'){

            $operacion= $request->numero1+$request->numero2;
        }
        elseif($request->operacion == 'resta'){
            
            $operacion= $request->numero1-$request->numero2;
        }
        elseif($request->operacion == 'division'){
            
            $operacion= $request->numero1/$request->numero2;
        }
        
        return $operacion;
    }
    public function store(Request $request){

        Persona::create(['nombre'=>$request->name_persona, 'apellido'=>$request->apellido_persona, 'edad'=> $request->edad ]);
        
    }
    public function listado(){
        return view('listado');
    }
    public function index()
    {

        /*unidimensional*/
        $lista= ['uno','dos','tres'];

        /* Array bidimensional asociativo */
        $users = [
            ['name' => 'Juan', 'email' => 'juan@example.com'],
            ['name' => 'María', 'email' => 'maria@example.com'],
            ['name' => 'Pedro', 'email' => 'pedro@example.com'],
        ];
        $products = [
            [
                'name' => 'Laptop',
                'price' => 1200,
                'description' => 'Portátil de última generación.',
                'specs' => ['RAM' => '8GB', 'CPU' => 'Intel i5', 'Storage' => '256GB SSD']
            ],
            [
                'name' => 'Teléfono',
                'price' => 600,
                'description' => 'Teléfono inteligente con pantalla OLED.',
                'specs' => ['RAM' => '6GB', 'Camera' => '12MP', 'Storage' => '128GB']
            ],
            [
                'name' => 'Smartwatch',
                'price' => 150,
                'description' => 'Reloj inteligente con seguimiento de actividad.',
                'specs' => ['Display' => '1.4"', 'Battery' => '300mAh', 'Connectivity' => 'Bluetooth']
            ],
        ];

        return view('hola',compact('users','lista','products'));
        
        




    }

}
