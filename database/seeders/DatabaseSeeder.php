<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // $this->call(DemoDataSeeder::class);
        // $this->call(DemoDataSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // Call the ProductSeeder
        $this->call(ProductSeeder::class);


    }
}
