<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->insert([
            [
                'BlogID' => 1, // ID của blog đã tạo
                'UserID' => 2, // ID của user đã tạo
                'Content' => 'Great post!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
