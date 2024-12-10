<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\employee;
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
        // user :: truncate();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        employee :: truncate();
        employee :: factory()->count(200)->create();
        
    }
}
