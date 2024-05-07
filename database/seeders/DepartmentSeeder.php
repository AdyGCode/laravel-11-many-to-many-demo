<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Administration',
                'manager' => 1,
            ],
            [
                'name' => 'Marketing',
                'manager' => 2,
            ],
            [
                'name' => 'White Goods',
                'manager' => 5,
            ],
            [
                'name' => 'Sports',
                'manager' => 6,
            ],
            [
                'name' => 'Shoes',
                'manager' => 7,
            ],
            [
                'name' => 'Clothing',
                'manager' => 8,
            ],
            [
                'name' => 'Toys & Games',
                'manager' => 9,
            ],
        ];

        $employees = Employee::count();

        foreach ($departments as $department){
            Department::create($department);
        }

    }
}
