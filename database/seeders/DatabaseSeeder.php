<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \DB::table('roles')->insert([
           'name' => 'user'
        ]);

        \DB::table('roles')->insert([
            'name' => 'admin'
        ]);

        \DB::table('users')->insert([
            'name' => 'Jesse',
            'email' => 'jesse@girls.com',
            'password' => 'kinderenliefde',
            'role_id' => 1,
        ]);

    }
}
