<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
            'codigo' => '0002829',
            'descripcion' => 'licuador 3mm leocio prado',
            'precio' => '1000$',
            'stock' => '1000',
            'familia_id' => '1',
            'marca_id' => '2',
            'unidad_medida_id' => '2',
        ],
        [
            'codigo' => '000282323',
            'descripcion' => 'batidora amoledora azul de acero',
            'precio' => '1000$',
            'stock' => '1000',
            'familia_id' => '3',
            'marca_id' => '2',
            'unidad_medida_id' => '1',
        ],
        [
            'codigo' => '0002829',
            'descripcion' => 'licuador 3mm leocio prado',
            'precio' => '1000$',
            'stock' => '1000',
            'familia_id' => '1',
            'marca_id' => '2',
            'unidad_medida_id' => '2',
        ],
        ]);
    }
}
