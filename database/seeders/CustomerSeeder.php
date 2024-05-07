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
            ['id' => 100, 'given_name' => 'Ivanna', 'family_name' => "Vinn",],
            ['id' => 101, 'given_name' => 'Russ', 'family_name' => "Hin-Round",],
            ['id' => 102, 'given_name' => 'Chip', 'family_name' => "Buttie",],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
