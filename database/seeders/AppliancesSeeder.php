<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppliancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appliances')->insert(array(
            0 =>
                array(
                    'name' => 'Geladeira',
                    'description' => 'A geladeira mais economica do Brasil!',
                    'voltage' => '220',
                    'brand_id' => 1,
                    'created_at' => '2022-04-07 11:40:00',
                    'updated_at' => '2022-04-07 11:40:00',
                ),
            1 =>
                array(
                    'name' => 'Fogão',
                    'description' => 'O maior forno da categoria!',
                    'voltage' => '110',
                    'brand_id' => 2,
                    'created_at' => '2022-04-07 11:40:00',
                    'updated_at' => '2022-04-07 11:40:00',
                ),
            2 =>
                array(
                    'name' => 'Microondas',
                    'description' => 'Possui o programa de descongelamento mais eficiente do mercado!',
                    'voltage' => '220',
                    'brand_id' => 3,
                    'created_at' => '2022-04-07 11:40:00',
                    'updated_at' => '2022-04-07 11:40:00',
                ),
            3 =>
                array(
                    'name' => 'Torradeira',
                    'description' => 'A torradeira que deixa o pão quentinho em minutos.',
                    'voltage' => '110',
                    'brand_id' => 4,
                    'created_at' => '2022-04-07 11:40:00',
                    'updated_at' => '2022-04-07 11:40:00',
                ),
            4 =>
                array(
                    'name' => 'Liquidificador',
                    'description' => 'O motor mais robusto e economico da categoria!',
                    'voltage' => '220',
                    'brand_id' => 5,
                    'created_at' => '2022-04-07 11:40:00',
                    'updated_at' => '2022-04-07 11:40:00',
                ),
        ));
    }
}
