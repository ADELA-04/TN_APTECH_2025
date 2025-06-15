<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageVisitsSeeder extends Seeder
{
    public function run()
    {
        DB::table('page_visits')->insert([
            [
                'visited_at' => now(),
                'count' => 1,
            ],
        ]);
    }
}
