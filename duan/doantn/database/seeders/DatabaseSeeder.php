<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            CategoriesSeeder::class,
            BlogsSeeder::class,
            CommentsSeeder::class,
            PageVisitsSeeder::class,
            SettingsSeeder::class,
        ]);
    }
}
