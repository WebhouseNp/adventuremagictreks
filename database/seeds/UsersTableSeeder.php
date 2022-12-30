<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();
      $user = [
        [
        'name' => 'Adventure Magic',
        'email' => 'info@adventure.com',
        'type' => 'superadmin',
        // 'status' => '1',
        'password' => bcrypt('password'),
        ],

        [
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'type' => 'superadmin',
        'password' => bcrypt('password'),
        ],

        [
          'name' => 'User',
          'email' => 'user@user.com',
          'type' => 'user',
          'password' => bcrypt('user@123'),
          ]

      ];

      User::insert($user);
    }
}
