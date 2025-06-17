<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionSeeder extends Seeder
{
    public function run()
    {
        DB::table('sessions')->insert([
            [
                'id' => 'ajnuJjaScH5rXjR7RrGUnP1o1enLQFV9vKaAIwFH',
                'user_id' => 1, // hoặc null nếu không có người dùng
                'ip_address' => '127.0.0.1',
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36',
                'payload' => 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMXlJU0VtS1E2enRDTm1QcGtYc0tMc3A1ZlcxbURBTnZVMXpVUEh6byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0L2RldGFpbC82Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1NToibG9naW5fY3VzdG9tZXJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=',
                'last_activity' => time(),
            ],

        ]);
    }
}
