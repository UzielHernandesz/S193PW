<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;


// Route::get('/', function () {
//     return view('inicio');

// })->name('rutaInicio');


// Route::get('/', function () {
//     return view('formulario');

// })->name('rutaForm');


// Route::get('/consultar', function () {
//     return view('clientes');

// })->name('rutaClientes');


// Route::view('/','Inicio')->name('rutaInicio');
// Route::view('/form','formulario')->name('rutaForm');
// Route::view('/consultar','clientes')->name('rutaClientes');



Route::view('/component','componentes')->name('rutacomponent');



//  ruta para controlador Vistas

Route::get('/', [ControladorVistas::class, 'home' ])->name('rutaInicio');

// Route::get('/form', [ControladorVistas::class, 'formulario' ])->name('rutaForm');


// Route::get('/consultar', [ControladorVistas::class, 'consulta' ])->name('rutaClientes');

// Route::post('/enviarCliente', [ControladorVistas::class, 'procesarCliente' ])->name('rutaEnviar');

// Rutas para cliente controlador

Route::get('/cliente/create', [clienteController::class, 'create' ])->name('rutaForm');

Route::post('/cliente', [clienteController::class, 'store' ])->name('rutaEnviar');

Route::get('/cliente', [clienteController::class, 'index' ])->name('rutaClientes');

// Route::get('/cliente/edit', [clienteController::class, 'edit' ])->name('rutaForm2');

Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');

Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');



// Route::get('/cliente', [clienteController::class, 'edit' ])->name('datoscliente');



