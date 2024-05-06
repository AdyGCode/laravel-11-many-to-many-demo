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
        $course->national = false;
        $course->title = 'Introduction to PHP';
        $course->description = 'The Traversy Media course that provides '.
            'you with the essential PHP skills to '.
            'develop dynamic websites. '.
            'https://traversymedia.com';
        $course->status = 1; // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
        $course->save();

        // Create more courses using foreach ...
        $courses = [

            [
                'code' => 'ICT40120',
                'national' => true,
                'title' => 'Certificate IV in Information Technology',
                'status' => 1, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'LRV101',
                'title' => 'Introduction to Laravel',
                'description' => 'Introduction to Laravel',
                'national' => false,
                'status' => 1, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'LRV201',
                'title' => 'Introduction to Laravel APIs',
                'description' => 'Creating APIs with laravel',
                'national' => false,
                'status' => 1, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT30120',
                'national' => true,
                'title' => 'Certificate III in Information Technology',
                'status' => 1, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

            [
                'code' => 'ICT50220',
                'national' => true,
                'title' => 'Diploma of Information Technology',
                'status' => 1, // 0 = unknown, 1 = current, 8 = replaced, 9 = deleted
            ],

        ];


        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
