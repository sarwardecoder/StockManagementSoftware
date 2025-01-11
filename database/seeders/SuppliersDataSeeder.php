<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('suppliers')->insert([
            [

                'name' => 'Fresh Company',
                'address' => 'Dhaka, Bangladesh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nabisco',
                'address' => 'Dhaka, Bangladesh',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' => 'Square',
                'address' => 'Dhaka, Bangladesh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Twisted Recipe',
                'address' => 'Dhaka, Bangladesh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' => 'RFL',
                'address' => 'Dhaka, Bangladesh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
