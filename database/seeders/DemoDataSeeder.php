<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'name' => 'John Doe',
                'role' => 'officer',
                'email' => 'john.doe@example.com',
                'phone' => '+88017668800',
                'salary' => 50000,
                'date_of_hire' => '01.01.2020',
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Doe',
                'role' => 'sr officer',
                'email' => 'jane.doe@example.com',
                'phone' => '+88017668801',
                'salary' => 50000,
                'date_of_hire' => '01.01.2020',
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
           
        ]);
    }
}
