<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'Username' => 'admin',
                'Email' => 'admin@gmail.com',
                'Password' => bcrypt('12345678'),
                'Role' => 'Admin',
                'Avatar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Username' => 'nhanvien',
                'Email' => 'staff@gmail.com',
                'Password' => bcrypt('12345678'),
                'Role' => 'Staff',
                'Avatar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Username' => 'khachhang',
                'Email' => 'customer@gmail.com',
                'Password' => bcrypt('12345678'),
                'Role' => 'Customer',
                'Avatar' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
