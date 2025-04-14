<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipodocumentocliente')->insert([
            [
            'nombre' => 'DNI',
        ],
        [
        'nombre' => 'Carnet Extranjeria',
        ],
        [
            'nombre' => 'RUC',
            ],
            [
                'nombre' => 'Pasaporte',
            ],
            [
            'nombre' => 'Ced. Diplomatica',
            ],
            [
                'nombre' => 'Otros',
                ],
        ]);
    }
}
