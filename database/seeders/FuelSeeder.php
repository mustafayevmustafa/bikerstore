<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Fuel;
use Illuminate\Database\Seeder;

class FuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fuel::insert([
            array(
                'name' => 'Benzin',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Mazot',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Dizel',
                'created_at' => now(),
                'updated_at' => now()
            ),
        ]);
    }
}
