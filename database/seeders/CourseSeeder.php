<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create two courses
        $course = new Course();
        $course->code = 'PHP101';
        $course->title = 'Introduction to PHP';
        $course->description = 'The Traversy Media course that provides ' .
            'you with the essential PHP skills to ' .
            'develop dynamic websites. ' .
            'https://traversymedia.com';
        $course->save();

        // Create more courses using foreach ...
        $courses = [
            [
                'code' => 'LRV101',
                'title' => 'Introduction to Laravel',
                'description' => 'Introduction to Laravel',
            ],

            [
                'code' => 'LRV201',
                'title' => 'Introduction to Laravel APIs',
                'description' => 'Creating APIs with laravel',
            ],

        ];

        foreach($courses as $course){
            Course::create($course);
        }
    }
}
