<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    // usamos este controlador para administrar la logica de las vistas 


    public function home()
    {
        return view('inicio');
    }

    public function formulario()
    {
        return view('formulario');
        
    }

    public function consulta()
    {
        return view('cliente');
        
    }

    public function procesarCliente(Request $peticion)
    {
        // return 'Si llego la info del cliente :(';

        return $peticion->all();

        // return $peticion->path();

        // return $peticion->url();


            // return $peticion->ip();







        


    }

}
