<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcaproducto')->insert([
            [
                'nombre' => 'oster',
            ],
            [
                'nombre' => 'imaco',
            ],
            [
                'nombre' => 'bosh',
            ],
    ]);
    }
}
