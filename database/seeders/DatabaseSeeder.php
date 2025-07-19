<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\student;
// use App\Models\user;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // student::factory()->count(10)->create();
        // user::factory()->count(10)->create();
        // student::factory(5)->create();
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     PeopleSeeder::class
        //     // Add other seeders here
        // ]);
     
        // $this->call([
        //     StudentSeeder::class
        // ]); 
     
        $this->call([
            StudentSeeder::class
        ]); 
        
    }
}
