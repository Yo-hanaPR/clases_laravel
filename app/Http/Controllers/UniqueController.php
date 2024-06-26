<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniqueController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        /**
         * CONTROLADOR DE UNA SOLA INVOCACION. 
         * Al usar una ruta que apunte a éste controlador, se va a llamar a éste método.
         * Revisar porqué no está accediendo. 
         */
        return "YANLUIS";
    }
}
