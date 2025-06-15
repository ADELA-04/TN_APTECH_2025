<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'CustomerID' => 1,
                'ShippingAddressID' => 1,
                'TotalAmount' => 200.00,
                'OrderStatus' => 'Chờ xác nhận',
                'PaymentMethod' => 'COD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
