<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin user
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'city' => "Perth",
            'state' => 'WA',
            'password' => "Password1",
        ]);

        // Additional Seed Users
        $seedUsers = [
            [
                'name' => 'Adrian Gould',
                'email' => 'adrian.gould@example.com',
                'city' => "Perth",
                'state' => 'WA',
                'password' => "Password1",
            ],
            [
                'name' => 'Ivanna Vinn',
                'email' => 'ivanna.vinn@example.com',
            ],
            [
                'name' => 'Russ Round',
                'email' => 'russ.hin-around@example.com',
                'city' => "Canberra",
                'state' => 'ACT',
            ],
            [
                'name' => 'Chip Buttie',
                'email' => 'chip.buttie@example.com',
            ],
            [
                'name' => 'Annie Wun',
                'email' => 'annie.wun@example.com',
            ],
            [
                'name' => 'Andy Mann',
                'email' => 'andy.mann@example.com',
                'city' => "Melbourne",
                'state' => 'VIC',
            ],
            [
                "name" => "April Schauer",
                "email" => "April.Schauer@example.com",
            ],
            [
                "name" => "Al K. Seltzer",
                "email" => "Al.K.Seltzer@example.com",
            ],
            [
                "name" => "Dee Sember",
                "email" => "Dee.Sember@example.com",
            ],
            [
                "name" => "Jo Kerr",
                "email" => "Jo.Kerr@example.com",
                'city' => "Townsville",
                'state' => 'QLD',
            ],
            [
                "name" => "Izzy Kidding",
                "email" => "Izzy.Kidding@example.com",
            ],
        ];

        foreach ($seedUsers as $seedUser) {
            User::factory()->create($seedUser);
        }
    }
}
