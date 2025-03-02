<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Thêm danh mục cha
        $electronics = DB::table('categories')->insertGetId([
            'CategoryName' => 'Electronics',
            'IsVisible' => true,
        ]);

        $clothing = DB::table('categories')->insertGetId([
            'CategoryName' => 'Clothing',
            'IsVisible' => true,
        ]);

        // Thêm danh mục con của Clothing
        $womenClothing = DB::table('categories')->insertGetId([
            'CategoryName' => 'Women Clothing',
            'IsVisible' => true,
            'parent_id' => $clothing,
        ]);

        $pants = DB::table('categories')->insertGetId([
            'CategoryName' => 'Pants',
            'IsVisible' => true,
            'parent_id' => $womenClothing,
        ]);

        // Thêm các danh mục con của Pants
        DB::table('categories')->insert([
            [
                'CategoryName' => 'Jeans',
                'IsVisible' => true,
                'parent_id' => $pants,
            ],
            [
                'CategoryName' => 'Kakis',
                'IsVisible' => true,
                'parent_id' => $pants,
            ],
        ]);

        // Thêm các danh mục con khác của Women Clothing
        DB::table('categories')->insert([
            [
                'CategoryName' => 'Tops',
                'IsVisible' => true,
                'parent_id' => $womenClothing,
            ],
            [
                'CategoryName' => 'Shoes',
                'IsVisible' => true,
                'parent_id' => $womenClothing,
            ],
        ]);
    }
}
