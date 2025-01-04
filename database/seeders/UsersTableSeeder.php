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
                'name' => 'Rafi',
                'email' => 'rafi@example.com',
                'phone' => '018xxxxxxx1',
                'salary' => 3500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ahad',
                'email' => 'ahad@example.com',
                'phone' => '018xxxxxxx2',
                'salary' => 3200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add the rest of the users similarly
        ]);
    }
}
