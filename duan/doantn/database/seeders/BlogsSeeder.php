<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'Title' => 'First Blog Post',
                'Content' => 'This is the content of the first blog post.',
                'ImageURL'=>'',
                'IsVisible' => true,
                'View' => 0,
                'CategoryID' => 1, // ID của category đã tạo
                'CreatedBy' => 2, // ID của user đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Title' => 'First Blog Post',
                'Content' => 'This is the content of the first blog post.',
                'ImageURL'=>'',
                'IsVisible' => true,
                'View' => 0,
                'CategoryID' => 1, // ID của category đã tạo
                'CreatedBy' => 2, // ID của user đã tạo
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
