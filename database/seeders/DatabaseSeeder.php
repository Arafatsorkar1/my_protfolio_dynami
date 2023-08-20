<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hamcrest\Arrays\SeriesMatchingOnce;
use Illuminate\Database\Seeder;
use function Illuminate\Validation\make;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Sorkar',
             'email' => 'admin@gmail.com',
             'password' => '987654321',
         ]);
    }
}
