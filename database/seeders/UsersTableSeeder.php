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

                'email' => 'moni@example.com',
                'otp' => 3505,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'karim@example.com',
                'otp' => 4562,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'email' => 'ruhina@example.com',
                'otp' => 3515,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'lalona@example.com',
                'otp' => 7541,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add the rest of the users similarly
        ]);
    }
}
