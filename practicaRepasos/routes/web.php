<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasRepaso1;

Route::get('/', [VistasRepaso1::class, 'inicio' ])->name('rutaDatos');

Route::get('/repaso1', [VistasRepaso1::class, 'repaso1' ])->name('rutaRepaso');
