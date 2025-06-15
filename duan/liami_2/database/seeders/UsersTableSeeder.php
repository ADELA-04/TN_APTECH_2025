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
                    'Username' => 'Admin2',
                    'Email' => 'dothom07082005@gmail.com',
                    'Password' => bcrypt('12345678'),
                    'Role' => 'Admin',
                    'Phone' => '0123456780',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'Username' => 'Nhân viên 2',
                    'Email' => 'nvmoi@gmail.com',
                    'Password' => bcrypt('12345678'),
                    'Role' => 'Admin',
                    'Phone' => '0123456780',
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
