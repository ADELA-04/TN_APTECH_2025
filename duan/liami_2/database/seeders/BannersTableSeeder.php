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
                'Title' => 'Welcome to Our Store',
                'subTitle' => 'Best products at the best prices',
                'Link' => 'http://127.0.0.1:8000/product/detail',
                'ImageURL' => 'assets/images3/1741489570_gallery-img2-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Title' => 'Welcome to Our Store',
                'subTitle' => 'Best products at the best prices',
                'Link' => 'http://127.0.0.1:8000/product/detail',
                'ImageURL' => 'assets/images3/1741489500_slide-img1-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
