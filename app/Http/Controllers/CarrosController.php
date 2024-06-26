<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer; //importar dependencia para hacer la inyeccion de dependencias
use App\Mail\DemoEmail;

class CarrosController extends Controller
{
    //
    protected $mailer;


    /**
     * La dependencia se pasa en el constructor del controlador. 
     * La dependencia se le asigna a la variable de instancia. 
     * Una vez que se inyecta la dependencia, puedes hacer uso de los métodos de esa clase 
     * como en la línea 31, donde se accede a los metodos TO, y SEND para enviar un correo electronico. 
     * Revisar a donde está llegando el correo electronico.
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer= $mailer;
    }

    public function suma(){
        $toEmail='yohanazareth26@gmail.com';
        $subject="Clases de laravel";
        $message="Segunda clase hoy";

        $this->mailer->to($toEmail)->send(new \App\Mail\DemoEmail($subject, $message));
        return "Exito";
    }
}
