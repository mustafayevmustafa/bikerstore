<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::insert([
            array(
                'name' => 'Yasil',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Qara',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Ag',
                'created_at' => now(),
                'updated_at' => now()
            ),
        ]);
    }
}
