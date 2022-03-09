<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Marka;
use Illuminate\Database\Seeder;

class MarkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marka::insert([
            array(
                'name' => 'A',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'B',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'C',
                'created_at' => now(),
                'updated_at' => now()
            ),
        ]);
    }
}
