<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Pattern;
use Illuminate\Database\Seeder;

class PatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pattern::insert([
            array(
                'name' => 'Model1',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Model2',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Model3',
                'created_at' => now(),
                'updated_at' => now()
            ),
            array(
                'name' => 'Model4',
                'created_at' => now(),
                'updated_at' => now()
            ),
        ]);
    }
}
