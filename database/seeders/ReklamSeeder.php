<?php

namespace Database\Seeders;
use App\Models\Reklam;
use Illuminate\Database\Seeder;

class ReklamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reklam::insert([
            array(
                'title' => 'reklam',
                'content' => 'reklam haqqinda',
                'link' => 'reklam.link',
                'image' => 'sekil',
                'created_at' => now(),
                'updated_at' => now()
            )
        ]);
    }
}
