<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;


class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();
        $setting = [
          'site_name' => 'Adventure Magic',
          'meta_title' => 'Adventure Magic',
          'meta_description' => 'Adventure Magic',
          'keyword' => 'Adventure Magic',
        ];
        Setting::create($setting);
    }
}
