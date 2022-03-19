<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::insert([
            'site_title'  => 'saytin basligi',
            'site_url'    => 'saytin urlsi yazilacaq',
            'address'     => 'sumqayi/18mkr',
            'email'       => 'elvin@gmail.com',
            'mobile'      => '0555555555',
            'description' => 'burada uzun aciqlama olacaq',
            'keywords'     => 'acar sozler gelecek',
            'author'       => 'elvin esedullayev',
            'created_at'   => now(),
            'updated_at'   => now()
        ]);
    }
}
