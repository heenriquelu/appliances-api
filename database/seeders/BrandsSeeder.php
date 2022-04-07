<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert(array(
            0 =>
                array(
                    'name' => 'Brastemp',
                    'description' => 'A marca pioneira do Brasil',
                    'created_at' => '2022-04-07 11:40:00',
                    'updated_at' => '2022-04-07 11:40:00',
                ),
            1 =>
                array(
                    'name' => 'Eletrolux',
                    'description' => 'A marca que mais vende no Brasil',
                    'created_at' => '2022-04-07 11:40:00',
                    'updated_at' => '2022-04-07 11:40:00',
                ),
            2 =>
                array(
                    'name' => 'Fischer',
                    'description' => 'A marca queridinha do Brasil',
                    'created_at' => '2022-04-07 11:40:00',
                    'updated_at' => '2022-04-07 11:40:00',
                ),
            3 =>
                array(
                    'name' => 'Samsung',
                    'description' => 'A marca mais inteligente do Brasil',
                    'created_at' => '2022-04-07 11:40:00',
                    'updated_at' => '2022-04-07 11:40:00',
                ),
            4 =>
                array(
                    'name' => 'LG',
                    'description' => 'A marca inovadora do Brasil',
                    'created_at' => '2022-04-07 11:40:00',
                    'updated_at' => '2022-04-07 11:40:00',
                )
        ));
    }
}
