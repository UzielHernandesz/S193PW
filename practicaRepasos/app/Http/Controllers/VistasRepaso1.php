<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasRepaso1 extends Controller
{
    public function inicio()
    {
        return view('welcome');
    }

    public function repaso1()
    {
        return view('repaso1');
    }
}
