<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            array(
                'name' => 'Motosklet',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Masin',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Kamaz',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Skutur',
                'created_at' => now(),
                'updated_at' => now()
            ),
        ]);
    }
}
