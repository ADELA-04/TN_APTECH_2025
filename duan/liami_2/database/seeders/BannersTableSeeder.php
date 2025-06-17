<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        DB::table('banners')->insert([
            [
                'Title' => 'Khám phá phong cách của bạn',
                'subTitle' => 'Khám Phá Những Sản Phẩm Mới Mẻ Của Mùa Hè – Scotch & Soda',
                'Link' => 'http://127.0.0.1:8000/product/detail',
                'ImageURL' => 'assets/images3/1741489570_gallery-img2-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Title' => 'Khuyến mại bí ẩn',
                'subTitle' => 'KHUYẾN MẠI: GIẢM GIÁ 25%',
                'Link' => 'http://127.0.0.1:8000/product/detail',
                'ImageURL' => 'assets/images3/1741489500_slide-img1-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
