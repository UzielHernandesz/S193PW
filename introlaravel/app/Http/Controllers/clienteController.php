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
    public function edit(string $id)
    {
        // Asegúrate de que el modelo Cliente esté correctamente importado
        // $cliente = DB::table('clientes')->get($id);

        $cliente = DB::ClientefindOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('clientes')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
        // Validación de los datos
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required',
        ]);

        // $cliente = cliente::findOrFail($id);
        // $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
