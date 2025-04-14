<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
            'nombres' => 'Carlos agustin',
            'apellidos' => 'lopes aliaga',
            'razonsocial' => 'EPIKO TECH',
            'numerodocumento' => '123456789',
            'telefono' => '123456789',
            'correoelectronico' => '123456789@gmail.com',
            'tipo_persona_id' => '2',
            'tipo_documento_id' => '1',

        ],
        [
            'nombres' => 'Rogir agustin',
            'apellidos' => 'lopes aliaga',
            'razonsocial' => 'EPIKO TECH',
            'numerodocumento' => '123456789',
            'telefono' => '123456789',
            'correoelectronico' => '123456789@gmail.com',
            'tipo_persona_id' => '2',
            'tipo_documento_id' => '1',

        ],
        [
            'nombres' => 'Lloncita agustin',
            'apellidos' => 'lopes aliaga',
            'razonsocial' => 'EPIKO TECH',
            'numerodocumento' => '123456789',
            'telefono' => '123456789',
            'correoelectronico' => '123456789@gmail.com',
            'tipo_persona_id' => '2',
            'tipo_documento_id' => '1',

        ],
        ]);
        
        
    }
}
