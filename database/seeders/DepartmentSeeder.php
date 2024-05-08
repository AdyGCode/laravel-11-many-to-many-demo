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
                'manager_id' => 1,
            ],
            [
                'name' => 'Marketing',
                'manager_id' => 2,
            ],
            [
                'name' => 'White Goods',
                'manager_id' => 5,
            ],
            [
                'name' => 'Sports',
                'manager_id' => 6,
            ],
            [
                'name' => 'Shoes',
                'manager_id' => 7,
            ],
            [
                'name' => 'Clothing',
                'manager_id' => 8,
            ],
            [
                'name' => 'Toys & Games',
                'manager_id' => 9,
            ],
        ];

        $employees = Employee::count();

        foreach ($departments as $department){
            Department::create($department);
        }

    }
}
