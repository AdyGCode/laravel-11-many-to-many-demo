<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a new student
        $student1 = new Student();
        $student1->given_name = 'Jane';
        $student1->family_name = 'Doe';
        $student1->save();

        // Create a new student
        $student2 = new Student();
        $student2->given_name = 'John';
        $student2->family_name = 'Doe';
        $student2->save();


        // Use the relationship to add the student to the course
        $course1 = Course::whereCode('LRV101')->get();
        $student1->courses()->attach($course1);

        $course2 = Course::whereCode('PHP101')->get();
        $student2->courses()->attach($course2);
        $student2->courses()->attach($course1);

    }
}
