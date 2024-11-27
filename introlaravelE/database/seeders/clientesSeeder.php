<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Juan',
                'apellido'=>'Perex',
                'correo'=>'Juan@gmail.com',
                'telefono'=>'12345678911',
            ],
            [
                'nombre'=>'Andrea',
                'apellido'=>'Arredondo',
                'correo'=>'Andrea@gmail.com',
                'telefono'=>'12345678911',
            ],
            [
                'nombre'=>'Uziel',
                'apellido'=>'Hernandez',
                'correo'=>'Uziel@gmail.com',
                'telefono'=>'12345678911',
            ]
        ]);

    }
}
