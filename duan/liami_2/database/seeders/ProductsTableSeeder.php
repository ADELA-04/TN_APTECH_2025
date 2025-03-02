<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'ProductName' => 'Product 1',
                'Description' => 'Description for Product 1',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Status' => 'Available',
                'Image' => 'path/to/image1.jpg',
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductName' => 'Product 2',
                'Description' => 'Description for Product 2',
                'Price' => 200.00,
                'SalePrice' => 180.00,
                'Status' => 'Available',
                'Image' => 'path/to/image2.jpg',
                'View' => 0,
                'CategoryID' => 9, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
