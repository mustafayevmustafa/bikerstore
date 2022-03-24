<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(FuelSeeder::class);
        $this->call(MarkaSeeder::class);
        $this->call(PatternSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(ReklamSeeder::class);
    }
}
