<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            array(
                'name' => 'Baki',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Neftcala',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'masalli',
                'created_at' => now(),
                'updated_at' => now()
            ),
        ]);
    }
}
