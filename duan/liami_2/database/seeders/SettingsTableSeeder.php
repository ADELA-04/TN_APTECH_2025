<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        DB::table('settings')->insert([
            [
                'Logo' => 'assets/images3/1741486163_logo.svg',
                'Favicon' => 'assets/images3/1747130989_gallery-img1-7.jpg',
                'NavigationLink' => 'http://127.0.0.1:8000/',
                'LinkFB'=>'http://127.0.0.1:8000/',
                'LinkIN'=>'http://127.0.0.1:8000/',
                'BusinessName' => 'Công ty TNHH Thời trang LIAMI Việt Nam',
                'BossName' => 'Nguyễn Hồng Hạnh',
                'Phone' => '0963215791',
                'Address' => 'Số 12-Hồng Kỳ-Sóc Sơn-Hà Nội',
                'Email' => 'dothom07082004@gmail.com',
                'DefaultWeight' => 1,
                'created_at' => now(),
            ],
        ]);
    }
}
