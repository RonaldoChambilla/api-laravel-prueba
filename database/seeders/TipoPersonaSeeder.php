<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipopersonacliente')->insert([
            [
                'nombre' => 'Persona Natural',
            ],
            [
                'nombre' => 'Persona Juridica',
            ],
            [
                'nombre' => 'Persona NO Domiciliado',
              ],
    ]);
    }
}
