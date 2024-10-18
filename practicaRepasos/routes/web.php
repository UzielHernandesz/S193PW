<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistasRepaso1;
use App\Http\Controllers\ControladorConvertidor;

Route::get('/', [VistasRepaso1::class, 'inicio' ])->name('rutaDatos');

Route::get('/repaso1', [VistasRepaso1::class, 'repaso1' ])->name('rutaRepaso');


Route::post('/mb_gb', [ControladorConvertidor::class, 'mb_gb' ])->name('rutaMG_GB');

Route::post('/gb_mb', [ControladorConvertidor::class, 'gb_mb' ])->name('rutaGB_MB');

Route::post('/gb_tb', [ControladorConvertidor::class, 'gb_tb' ])->name('rutaGB_TB');

Route::post('/tb_gb', [ControladorConvertidor::class, 'tb_gb' ])->name('rutaTG_GB');

