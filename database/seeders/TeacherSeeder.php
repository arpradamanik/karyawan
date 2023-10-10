<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Faker\Factory as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) { 
            # code...
       
            $teacher = new Teacher;
        $teacher->teacher_name = $faker->name;
        $teacher->teacher_PHONE = $faker->ean13;
        $teacher->teacher_education = $faker->email;
        $teacher->teacher_city = $faker->city;
        $teacher->teacher_gender = "M";
        $teacher->save();
    }
    }
}
