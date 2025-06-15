<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        DB::table('order_details')->insert([
            [
                'OrderID' => 1,
                'ProductID' => 1,
                'Quantity' => 2,
                'Price' => 100.00,
            ],
        ]);
    }
}
