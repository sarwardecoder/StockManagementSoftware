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
        DB::table('profiles')->insert([
            [
                'firstName' => 'rafi',
                'lastName' => 'Doe',
                'mobile' => '+88017668800',
                'shippingAddress' => 'Dhaka, Bangladesh.',
                'profile_email' => 'rafi@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'ahad',
                'lastName' => 'Doe',
                'mobile' => '+88017668801',
                'shippingAddress' => 'Dhaka, Bangladesh.',
                'profile_email' => 'ahad@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'sumi',
                'lastName' => 'Doe',
                'mobile' => '+88017668800',
                'shippingAddress' => 'Dhaka, Bangladesh.',
                'profile_email' => 'sumi@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'selim',
                'lastName' => 'Doe',
                'mobile' => '+88017668801',
                'shippingAddress' => 'Dhaka, Bangladesh.',
                'profile_email' => 'selim@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'moni',
                'lastName' => 'Doe',
                'mobile' => '+88017668800',
                'shippingAddress' => 'Dhaka, Bangladesh.',
                'profile_email' => 'moni@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'karim',
                'lastName' => 'Doe',
                'mobile' => '+88017668801',
                'shippingAddress' => 'Dhaka, Bangladesh.',
                'profile_email' => 'karim@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'ruhina',
                'lastName' => 'Doe',
                'mobile' => '+88017668800',
                'shippingAddress' => 'Dhaka, Bangladesh.',
                'profile_email' => 'ruhina@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'firstName' => 'lalona',
                'lastName' => 'Doe',
                'mobile' => '+88017668801',
                'shippingAddress' => 'Dhaka, Bangladesh.',
                'profile_email' => 'lalona@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
        ]);
    }
}
