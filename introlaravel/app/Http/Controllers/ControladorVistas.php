<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    // usamoseste controlador para administrar la logica de las vistas 

    
    public function home()
    {
        return view( 'inicio' );
    }

    public function formulario()
    {
        return view( 'formulario' );
        
    }

    public function consulta()
    {
        return view( 'cliente' );
        
    }

}
