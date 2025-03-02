<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog_posts')->insert([
            [
                'Title' => 'Bài viết đầu tiên',
                'Content' => 'Nội dung của bài viết đầu tiên.',
                'Summary' => 'Tóm tắt bài viết đầu tiên.',
                'ImageURL' => 'url_hinh_anh_1.jpg',
                'IsVisible' => true,
                'AuthorID' => 5, // ID của tác giả trong bảng Users
                'views' => 0, // Thêm trường views
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Title' => 'Bài viết thứ hai',
                'Content' => 'Nội dung của bài viết thứ hai.',
                'Summary' => 'Tóm tắt bài viết thứ hai.',
                'ImageURL' => 'url_hinh_anh_2.jpg',
                'IsVisible' => true,
                'AuthorID' => 6, // ID của tác giả trong bảng Users
                'views' => 0, // Thêm trường views
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
