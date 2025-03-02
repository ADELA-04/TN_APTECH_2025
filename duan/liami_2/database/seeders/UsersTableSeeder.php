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
                    'Username' => 'Nguyễn Văn A',
                    'Email' => 'nguyenvana@example.com',
                    'Password' => bcrypt('password1'),
                    'Role' => 'User',
                    'Phone' => '0123456780',
                ],
                [
                    'Username' => 'Trần Thị B',
                    'Email' => 'tranb@example.com',
                    'Password' => bcrypt('password2'),
                    'Role' => 'User',
                    'Phone' => '0123456781',
                ],
                [
                    'Username' => 'Lê Văn C',
                    'Email' => 'levanc@example.com',
                    'Password' => bcrypt('password3'),
                    'Role' => 'User',
                    'Phone' => '0123456782',
                ],
                [
                    'Username' => 'Phạm Thị D',
                    'Email' => 'phamthid@example.com',
                    'Password' => bcrypt('password4'),
                    'Role' => 'User',
                    'Phone' => '0123456783',
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
