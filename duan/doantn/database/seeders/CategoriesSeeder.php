<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'CategoryName' => 'Technology',
                'IsVisible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'CategoryName' => 'Lifestyle',
                'IsVisible' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
