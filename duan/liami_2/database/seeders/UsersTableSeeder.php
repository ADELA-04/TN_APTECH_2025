<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        try {
            $users = [

                [
                    'Username' => 'Admin',
                    'Email' => 'nvmoi@gmail.com',
                    'Password' => bcrypt('12345678'),
                    'Role' => 'Admin',
                    'Phone' => '0123456780',
                    'Avartar' => 'assets/images3/1749479586_yt-07427_1554192484.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'Username' => 'Quản trị sp',
                    'Email' => 'nvsp@gmail.com',
                    'Password' => bcrypt('12345678'),
                    'Role' => 'Staff_Product',
                    'Phone' => '0123456780',
                    'Avartar' => 'assets/images3/1749479586_yt-07427_1554192484.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'Username' => 'Quản trị dh',
                    'Email' => 'nvdonhang@gmail.com',
                    'Password' => bcrypt('12345678'),
                    'Role' => 'Staff_Order',
                    'Phone' => '0123456780',
                    'Avartar' => 'assets/images3/1749479586_yt-07427_1554192484.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

            ];

            foreach ($users as $user) {
                User::create($user);
            }
        } catch (\Exception $e) {
            // In ra lỗi
            dd($e->getMessage());
        }
        // Lặp lại cho người dùng thứ hai với email khác
    }

}
