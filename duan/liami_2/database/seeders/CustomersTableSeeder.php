<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'FullName' => 'Đo Thi Thom',
            'Email' => 'khachhang2@gmail.com',
            'PasswordHash' => Hash::make('12345678'), // Mật khẩu đã băm
            'Gender' => 'Nữ',
            'ProfilePicture' => 'path/to/profile_picture_1.jpg',

            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Customer::create([
            'FullName' => 'Le Minh Nam',
            'Email' => 'khachhang3@gmail.com',
            'PasswordHash' => Hash::make('12345678'),
            'Gender' => 'Nam',
            'ProfilePicture' => 'path/to/profile_picture_2.jpg',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Customer::create([
            'FullName' => 'Pham Thuy Quynh',
            'Email' => 'khachhang4@gmail.com',
            'PasswordHash' => Hash::make('12345678'),
            'Gender' => 'Nữ',
            'ProfilePicture' => 'path/to/profile_picture_2.jpg',

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
