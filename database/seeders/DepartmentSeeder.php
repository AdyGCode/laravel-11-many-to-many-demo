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
                'name' => 'Shoes',
                'manager' => null,
            ],
            [
                'name' => 'Clothing',
                'manager' => null,
            ],
            [
                'name' => 'Toys & Games',
                'manager' => null,
            ],
        ];

        $employees = Employee::count();

        foreach ($departments as $department){
            $department['manager'] =  mt_rand(1,$employees);
            Department::create($department);
        }

    }
}
