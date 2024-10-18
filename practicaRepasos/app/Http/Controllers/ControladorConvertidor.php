<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorConvertidor extends Controller
{
    // request no se va a ejecutar hasta que le lleguen datos

    public function mb_gb(Request $request)
    {

        $valor = $request->input('valor1');
        $resultado = $valor / 1024;
    return response()->json(['El resultado en GB es' => $resultado]);


    }

    public function gb_mb(Request $request)
    {

        $valor = $request->input('valor2');
        $resultado = $valor * 1024;
    return response()->json(['El resultado en MG es ' => $resultado]);


    }


    public function gb_tb(Request $request)
    {

        $valor = $request->input('valor3');
        $resultado = $valor / 1024;
    return response()->json(['El resultado en TB es' => $resultado]);


    }

    public function tb_gb(Request $request)
    {

        $valor = $request->input('valor4');
        $resultado = $valor * 1024;

    return response()->json(['El resultado GB es ' => $resultado]);


    }

}
