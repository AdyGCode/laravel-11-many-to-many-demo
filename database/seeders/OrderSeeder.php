<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'customer_id' => 100,
                'packed_at' => Carbon::now()->subDays(mt_rand(0,365*2)/mt_rand(1,365)),
                'shipped_at' => null,
                'notes' => "Order made by Customer 100",
            ],

            [
                'customer_id' => 102,
                'packed_at' => Carbon::now()->subDays(mt_rand(0,365*2)/mt_rand(1,365)),
                'shipped_at' => null,
                'notes' => null,
            ],

            [
                'customer_id' => 101,
                'packed_at' => Carbon::now()->subDays(mt_rand(0,365*2)/mt_rand(1,365)),
                'shipped_at' => null,
                'notes' => null,
            ],

            [
                'customer_id' => 102,
                'packed_at' => Carbon::now()->subDays(mt_rand(0,365*2)/mt_rand(1,365)),
                'shipped_at' => null,
                'notes' => "Second Order made by Customer 102",
            ],

            [
                'customer_id' => 102,
                'packed_at' => Carbon::now()->subDays(mt_rand(0,365*2)/mt_rand(1,365)),
                'shipped_at' => null,
                'notes' => "Third Order made by Customer 102",
            ],

        ];

        foreach ($orders as $order) {
            Order::create($order);
        }

    }
}
