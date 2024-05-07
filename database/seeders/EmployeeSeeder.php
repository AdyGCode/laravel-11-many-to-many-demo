<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            [
                'id' => null, 'given_name' => 'Ivanna', 'family_name' => "Vinn",
                'email' => 'annie.wun@example.com',
                'manager' => null,
            ],
            [
                'id' => null, 'given_name' => 'Russ', 'family_name' => "Hin-Round",
                'email' => 'russ.hin-around@example.com',
                'manager' => null,
            ],
            [
                'id' => null, 'given_name' => 'Chip', 'family_name' => "Buttie",
                'email' => 'chip.buttie@example.com',
                'manager' => null,
            ],
            [
                'given_name' => 'Annie', 'family_name' => 'Wun',
                'email' => 'annie.wun@example.com',
                'manager' => null,
            ],
            [
                'given_name' => 'Andy', 'family_name' => 'Mann',
                'email' => 'andy.mann@example.com',
                'manager' => null,
            ],
            [
                'id' => null, "given_name" => "April", "family_name" => "Schauer",
                "email" => "April.Schauer@example.com",
                'manager' => null,
            ],
            [
                'id' => null, "given_name" => "Al K.", "family_name" => "Seltzer",
                "email" => "Al.K.Seltzer@example.com",
                'manager' => null,
            ],
            [
                'id' => null, "given_name" => "Dee", "family_name" => "Sember",
                "email" => "Dee.Sember@example.com",
                'manager' => null,
            ],
            [
                'id' => null, "given_name" => "Jo", "family_name" => "Kerr",
                "email" => "Jo.Kerr@example.com",
                'manager' => null,
            ],
            [
                'id' => null, "given_name" => "Izzy", "family_name" => "Kidding",
                "email" => "Izzy.Kidding@example.com",
                'manager' => null,
            ],

        ];

        shuffle($employees);

        foreach ($employees as $employee) {
            $newEmployee = Employee::create($employee);
            $numEmployees = Employee::count();

            if ($numEmployees > 1) {
                $manager = mt_rand(1, $numEmployees-1);
                $newEmployee->manager = $manager;
            }
            $newEmployee->save();
        }

    }
}
