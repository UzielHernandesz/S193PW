<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;




//  ruta para controlador

Route::get('/', [ClienteController::class, 'home' ])->name('rutaInicio');
Route::resource( 'cliente', ClienteController::class );
