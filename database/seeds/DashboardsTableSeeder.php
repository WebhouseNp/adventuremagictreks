<?php

use Illuminate\Database\Seeder;
use App\Models\Dashboard;

class DashboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dashboard::truncate();
        $dashboard = [
          'site_name' => 'Adventure Magic',
          'meta_title' => 'Adventure Magic',
          'meta_description' => 'Adventure Magic',
          'keyword' => 'Adventure Magic',
        ];
        Dashboard::create($dashboard);
    }
}
