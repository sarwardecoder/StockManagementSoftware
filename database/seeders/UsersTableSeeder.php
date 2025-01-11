<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [

                'name' => 'moni',
                'email' => 'moni@example.com',
                'password' => 7541,
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'karim',
                'email' => 'karim@example.com',
                'password' => 7541,
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' => 'ruhina',
                'email' => 'ruhina@example.com',
                'password' => 7541,
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'lalona',
                'email' => 'lalona@example.com',
                'password' => 7541,
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' => 'fiona',
                'email' => 'fiona@example.com',
                'password' => 7541,
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
