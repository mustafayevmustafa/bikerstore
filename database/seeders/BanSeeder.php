<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Ban;
class BanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = 'sportbike';
        Ban::insert([
            'name' => $name,
            'slug' => Str::slug($name),
        ]);
    }
}
