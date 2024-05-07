<?php

namespace Database\Seeders;

use App\Models\Customer;
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
        $numCustomers = Customer::count();

        $order = [
            'customer_id' => 100,
            'packed_at' => Carbon::now()->subDays(mt_rand(0, 365 * 2) / mt_rand(1, 365)),
            'shipped_at' => null,
            'notes' => "Demo note",
        ];
        $order['created_at'] = $order['packed_at']->subDays(mt_rand(0, 28 * 2) / mt_rand(1, 28));
        Order::create($order);

        $orders = [
            [
                'customer_id' => mt_rand(100, 100 + $numCustomers),
                'packed_at' => Carbon::now()->subDays(mt_rand(0, 365 * 2) / mt_rand(1, 365)),
                'shipped_at' => null,
                'notes' => "Demo note",
            ],
            [
                'customer_id' => mt_rand(100, 100 + $numCustomers),
                'packed_at' => Carbon::now()->subDays(mt_rand(0, 365 * 2) / mt_rand(1, 365)),
                'shipped_at' => null,
                'notes' => null,
            ],
            [
                'customer_id' => mt_rand(100, 100 + $numCustomers),
                'packed_at' => Carbon::now()->subDays(mt_rand(0, 365 * 2) / mt_rand(1, 365)),
                'shipped_at' => null,
                'notes' => null,
            ],
            [
                'customer_id' => mt_rand(100, 100 + $numCustomers),
                'packed_at' => Carbon::now()->subDays(mt_rand(0, 365 * 2) / mt_rand(1, 365)),
                'shipped_at' => null,
                'notes' => "This order must be left with next door neighbour",
            ],
            [
                'customer_id' => mt_rand(100, 100 + $numCustomers),
                'packed_at' => Carbon::now()->subDays(mt_rand(0, 365 * 2) / mt_rand(1, 365)),
                'shipped_at' => null,
                'notes' => "Please deliver to PO BOX 1234, Leederville, WA",
            ],
            [
                'customer_id' => mt_rand(100, 100 + $numCustomers),
                'packed_at' => Carbon::now()->subDays(mt_rand(0, 365 * 2) / mt_rand(1, 365)),
                'shipped_at' => null,
                'notes' => "This is very fragile, extreme care!",
            ],

        ];

        foreach ($orders as $order) {
            $order['created_at'] = $order['packed_at']->subDays(mt_rand(0, 28 * 2) / mt_rand(1, 28));
            Order::create($order);
        }

        $allOrders = Order::all();
        foreach ($allOrders as $order) {
            if (mt_rand(1, 10) >= 8) {
                $order->shipped_at = Carbon::create($order->packed_at)->addDays(mt_rand(0, 14 * 2) / mt_rand(1, 28));
            }
            $order->save();
        }

        for ($count = 0; $count < 15; $count++) {

            $orderBlank = [
                'customer_id' => mt_rand(100, 100 + $numCustomers),
                'packed_at' => null,
                'shipped_at' => null,
                'notes' => null,
            ];
            $order = Order::create($orderBlank);

            if (mt_rand(1, 10) >= 8) {
                $order->packed_at = Carbon::now()->subDays(mt_rand(0, 365 * 2) / mt_rand(1, 365));
                $order->shipped_at = null;

                if (mt_rand(1, 10) >= 8) {
                    $order->shipped_at = Carbon::create($order->packed_at)
                        ->addDays(mt_rand(0, 14 * 2) / mt_rand(1, 28));
                }
            }
            $order->save();
        }

    }
}
