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
                'CustomerID' => 1, // ID khách hàng
                'TotalAmount' => 100000.00,
                'OrderStatus' => 'Chờ xác nhận',
                'PaymentMethod' => 'COD',
                'Notes' => 'Ghi chú đơn hàng 1',
                'Address' => '123 Đường ABC, Phường XYZ, Thành phố HCM',
                'Phone' => '0123456789',
                'ShippingCode' => 'SHIPPING123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CustomerID' => 2,
                'TotalAmount' => 250000.50,
                'OrderStatus' => 'Đã xác nhận',
                'PaymentMethod' => 'Bank Transfer',
                'Notes' => 'Ghi chú đơn hàng 2',
                'Address' => '456 Đường DEF, Phường UVW, Thành phố HN',
                'Phone' => '0987654321',
                'ShippingCode' => 'SHIPPING456',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Thêm nhiều đơn hàng khác nếu cần
        ]);
    }
}
