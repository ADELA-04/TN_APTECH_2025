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
                'ProductName' => 'Váy Kaki Trắng 2 Dây Nhúm Ngực Ly Eo Chun Lưng Dễ Mặc 2 Form Ngắn Dài Cá Tính (Ảnh Thật Trải Sàn) Lollaye V.4',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 's,m,l',
                'Color' => 'xanh,đỏ,vàng',
                'Material' => 'lụa',
                'Image' => 'assets/images3/1745338631_vay-co-yem__3__4df4f29d24ce485392de8fbd7d28be26_1024x1024.jpg',
                'Weigh' => '1',
                'Brand' => 'Nhật Vy BOUTIQUE',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'ProductName' => 'Đầm vest công sở Nhật Vy dập ly tay dáng dài chất lụa sọc gân phù hợp dự tiệc sang chảnh - D2724',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 's,m,l',
                'Color' => 'xanh,đỏ,vàng',
                'Material' => 'lụa',
                'Image' => 'assets/images3/1745338708_fs2501143bpwoge1.jpg',
                'Weigh' => '1',
                'Brand' => 'Nhật Vy BOUTIQUE',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
              [
                'ProductName' => 'Đầm vest công sở Nhật Vy dập ly tay dáng dài chất lụa sọc gân phù hợp dự tiệc sang chảnh - D2724',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 's,m,l',
                'Color' => 'xanh, hồng',
                'Material' => 'lụa',
                'Image' => 'assets/images3/1745338769_fs2412012tlwobk_1.jpg',
                'Weigh' => '1',
                'Brand' => 'Nhật Vy BOUTIQUE',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'ProductName' => 'Váy Công Sở Nữ LOKOSA Chất Linen Sọc Dáng Dài Basic Đơn Giản Đầm Dài Sơ Mi Nhiều Màu Hồng VD002',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 's,m,l',
                'Color' => 'xanh, hồng',
                'Material' => 'lụa',
                'Image' => 'assets/images3/1745338828_fs2410307diwogr4.jpg',
                'Weigh' => '1',
                'Brand' => 'Nhật Vy BOUTIQUE',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'ProductName' => 'Đầm dự tiệc Nhật Vy đính cúc bọc dập ly dáng xoè chất lụa phù hợp công sở đi chơi sang trọng - D2820',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 's,m,l',
                'Color' => 'xanh, hồng,cam',
                'Material' => 'cotton',
                'Image' => 'assets/images3/1745339233_fs2501274diwobe3.jpg',
                'Weigh' => '1',
                'Brand' => 'Nhật Vy BOUTIQUE',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductName' => 'Đầm dự tiệc Nhật Vy nhún eo cổ cách điệu chất lụa phù hợp đi chơi công sở sang chảnh - D2835',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 's,m,l',
                'Color' => 'xanh, hồng,cam, lam',
                'Material' => 'cotton',
                'Image' => 'assets/images3/1745339284_fs2501197bklapk.jpg',
                'Weigh' => '1',
                'Brand' => 'Nhật Vy BOUTIQUE',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductName' => 'Áo sơ mi nữ tay ngắn BH Summer 2022 tay áo bong bóng rộng',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 's,m,l',
                'Color' => 'xanh, hồng,cam, lam',
                'Material' => 'cotton',
                'Image' => 'assets/images3/1745339355_download.jpg',
                'Weigh' => '1',
                'Brand' => 'Nhật Vy BOUTIQUE',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'ProductName' => 'Áo sơ mi trắng nữ BH Hàn Quốc dài tay cổ polo dáng rộng viền xù',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 'freesize',
                'Color' => 'xanh, hồng,cam, lam',
                'Material' => 'cotton',
                'Image' => 'assets/images3/1745340192_20250213_JVRlSSBbvT.jpg',
                'Weigh' => '1',
                'Brand' => 'Nhật Vy BOUTIQUE',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'ProductName' => 'Floweryou Áo Khoác Cardigan Dệt Kim Dáng Rộng Thời Trang Mùa Thu Cho Nữ',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 'freesize',
                'Color' => 'xanh, hồng',
                'Material' => 'cotton',
                'Image' => 'assets/images3/1745340271_20250301_mtnHkRBIg1.jpg',
                'Weigh' => '1',
                'Brand' => 'Nhật Vy BOUTIQUE',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
              [
                'ProductName' => 'Floweryou Áo Len Dệt Kim Cardigan Thêu Phong Cách Mới Áo Khoác Dáng Rộng Lười Biếng',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 'freesize',
                'Color' => 'xanh, hồng',
                'Material' => 'cotton',
                'Image' => 'assets/images3/1745340386_20250416_2nxj3mFb65.jpg',
                'Weigh' => '1',
                'Brand' => 'Trung Quốc',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ProductName' => 'Floweryou Áo Khoác Cardigan Dệt Kim Dáng Rộng Thời Trang Mùa Thu Cho Nữ',
                'Summary' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Description' => 'Một chiếc đầm trắng xinh xắn cho các nàng ❤️✨🍃',
                'Price' => 100.00,
                'SalePrice' => 90.00,
                'Size' => 'freesize',
                'Color' => 'xanh, hồng',
                'Material' => 'cotton',
                'Image' => 'assets/images3/1747044753_20250213_TMNooaMzFs.jpg',
                'Weigh' => '1',
                'Brand' => 'Trung Quốc',
                'Status' => null,
                'View' => 0,
                'CategoryID' => 10, // Thay đổi theo ID danh mục đã tạo
                'IsVisible' => true,
                'CreatedBy' => 8, // Thay đổi theo ID người dùng đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
