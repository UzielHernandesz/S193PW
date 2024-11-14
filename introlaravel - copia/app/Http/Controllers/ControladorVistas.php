<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

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

    public function procesarCliente(validadorCliente $peticion)
    {
//  RESPUESRTAS DE REDIRECCION

// redireccion usando la ruta
    // return redirect('/');

// redireccion usando el nombre de la rutaclientes
    // return redirect()->route('rutaClientes');


// redireccion al origen de la petición
    // return back();

    // redireccion de variable adjunta
// $id= [['usuario=>1'],['usuario=>2']];

// return view('formulario',compact('id'));


// redireccion con un mensaje flash en session



    $usuario= $peticion->input('txtnombre');

    session()->flash('exito',' Se guardo el usuario: ' . $usuario);
    return to_route('rutaForm');














        // return 'Si llego la info del cliente :(';

        // return $peticion->all();

        // return $peticion->path();

        // return $peticion->url();

            // return $peticion->ip();

    }

}
