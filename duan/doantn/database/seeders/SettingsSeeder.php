<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    public function run()
    {
        DB::table('settings')->insert([
            [
                'Logo' => 'logo.png',
                'Favicon' => 'favicon.ico',
                'NavigationLink' => 'http://example.com',
                'BusinessName' => 'My Business',
                'EmailBusiness' => 'info@example.com',
                'AddressBusiness' => '123 Business St.',
                'Hotline' => '123-456-7890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
