<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        DB::table('carts')->insert([
            [
                'CustomerID' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
