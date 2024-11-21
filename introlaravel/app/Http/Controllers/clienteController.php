<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     * Para la consulta del CRUD
     */
    public function index()
    {
        $consultaclientes = DB::table('clientes')->get();
        return view('cliente', compact('consultaclientes'));
    }

    /**
     * Show the form for creating a new resource.
     * Lo usamos para abrir el formulario
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     * Aquí hago el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se guardó el usuario: ' . $usuario);
        return redirect()->route('rutaForm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Método no implementado
    }

    /**
     * Show the form for editing the specified resource.
     */



    public function edit($id)
    {



    $cliente = DB::table('clientes')->where('id', $id)->first();


    return view('edit', compact('cliente'));
}

public function update(validadorCliente $request, $id)
{

    $nombre = $request->input('txtnombre');
    $apellido = $request->input('txtapellido');
    $correo = $request->input('txtcorreo');
    $telefono = $request->input('txttelefono');


    DB::table('clientes')
        ->where('id', $id)
        ->update([
            "nombre" => $nombre,
            "apellido" => $apellido,
            "correo" => $correo,
            "telefono" => $telefono,
            "updated_at" => Carbon::now(),
        ]);


        $usuario = $request->input('txtnombre');
        session()->flash('exito', 'Se guardó el usuario: ' . $usuario);
        return redirect()->route('rutaClientes');
}

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        // $cliente = DB::table('clientes')->where('id', $id)->first();

        DB::table('clientes')->where('id', $id)->delete();


        return redirect()->route('rutaClientes')
        ->with('success', 'El cliente ha sido actualizado exitosamente.');


    }
}
