<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(DashboardsTableSeeder::class);
        $this->call(PillerTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(GroupTableSeeder::class);
        $this->call(PackageEquipmentsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(DestinationsTableSeeder::class);


    }
}
