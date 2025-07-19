<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // adding single record in db 
        // student::create([ 
        //     'name' => 'John Doe',
        //     'email' => 'email@email.com'
        //     ]);


        // adding multiple  record in db 
        // $students = collect([
        //     ['name' => '1John Doe', 'email' => 'email1@email.com'],
        //     ['name' => '2John Doe', 'email' => 'email2@email.com'],
        //     ['name' => '3John Doe', 'email' => 'email3@email.com'],
        //     ['name' => '4John Doe', 'email' => 'email4@email.com'],
        //     ['name' => '5John Doe', 'email' => 'email5@email.com'],
        //     ['name' => '6John Doe', 'email' => 'email6 @email.com']
        // ]);


        // $students->each(function ($student) {
        //     student::insert($student);
        // });

        // or you can use this method
        // student::insert($students->toArray());

        // or you can use this method
        // student::factory(10)->create();

        // or you can use this method
        // \App\Models\student::factory()->count(10)->create();



        // JSON file 

        // $json = File::get(database_path('data/students.json'));

        // $json = File::get('database/json/students.json');
        // // $students = json_decode($json);
        // // $students = json_decode($json, true);
        // $students = collect(json_decode($json));

        // $students->each(function ($student) {
        //     student::create([ 
        //     'name' => $student->name,
        //     'email' => $student->email
        //     ]);
        // });

        // fake data 
        // student::create([
        //     'name' => fake()->name(),
        //     'email' => fake()->unique()->email()
        // ]);

        // for ($i = 0; $i < 10; $i++) {
        //     student::create([
        //         'name' => fake()->name(),
        //         'email' => fake()->unique()->email()
        //     ]);
        // }

        student::factory(5)->create();

    }
}
