<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'id' => 100, 'given_name' => 'Ivanna', 'family_name' => "Vinn",
                'email' => 'annie.wun@example.com',
            ],
            [
                'id' => 101, 'given_name' => 'Russ', 'family_name' => "Hin-Round",
                'email' => 'russ.hin-around@example.com',
            ],
            [
                'id' => 102, 'given_name' => 'Chip', 'family_name' => "Buttie",
                'email' => 'chip.buttie@example.com',
            ],
            [
                'given_name' => 'Annie', 'family_name' => 'Wun',
                'email' => 'annie.wun@example.com',
            ],
            [
                'given_name' => 'Andy', 'family_name' => 'Mann',
                'email' => 'andy.mann@example.com',
            ],
            [
                'id' => null, "given_name" => "April", "family_name" => "Schauer",
                "email" => "April.Schauer@example.com",
            ],
            [
                'id' => null, "given_name" => "Al K.", "family_name" => "Seltzer",
                "email" => "Al.K.Seltzer@example.com",
            ],
            [
                'id' => null, "given_name" => "Dee", "family_name" => "Sember",
                "email" => "Dee.Sember@example.com",
            ],
            [
                'id' => null, "given_name" => "Jo", "family_name" => "Kerr",
                "email" => "Jo.Kerr@example.com",
            ],
            [
                'id' => null, "given_name" => "Izzy", "family_name" => "Kidding",
                "email" => "Izzy.Kidding@example.com",
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
