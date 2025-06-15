<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Thời trang nữ
        $womenFashionId = DB::table('categories')->insertGetId([
            'CategoryName' => 'Thời trang nữ',
            'IsVisible' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Các danh mục con của Thời trang nữ
        DB::table('categories')->insert([
            [
                'CategoryName' => 'Áo',
                'IsVisible' => true,
                'parent_id' => $womenFashionId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CategoryName' => 'Quần nữ',
                'IsVisible' => true,
                'parent_id' => $womenFashionId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CategoryName' => 'Váy',
                'IsVisible' => true,
                'parent_id' => $womenFashionId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Phụ kiện cho nữ
        $womenAccessoriesId = DB::table('categories')->insertGetId([
            'CategoryName' => 'Phụ kiện cho nữ',
            'IsVisible' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Các danh mục con của Phụ kiện cho nữ
        DB::table('categories')->insert([
            [
                'CategoryName' => 'Dây lưng',
                'IsVisible' => true,
                'parent_id' => $womenAccessoriesId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CategoryName' => 'Trang sức',
                'IsVisible' => true,
                'parent_id' => $womenAccessoriesId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CategoryName' => 'Mũ nón',
                'IsVisible' => true,
                'parent_id' => $womenAccessoriesId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CategoryName' => 'Kính mắt',
                'IsVisible' => true,
                'parent_id' => $womenAccessoriesId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Thời trang trẻ em
        $kidsFashionId = DB::table('categories')->insertGetId([
            'CategoryName' => 'Thời trang trẻ em',
            'IsVisible' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Các danh mục con của Thời trang trẻ em
        DB::table('categories')->insert([
            [
                'CategoryName' => 'Áo cho bé',
                'IsVisible' => true,
                'parent_id' => $kidsFashionId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CategoryName' => 'Đồ bộ',
                'IsVisible' => true,
                'parent_id' => $kidsFashionId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
