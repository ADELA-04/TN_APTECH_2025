<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Username')->unique(); // Cột Username
            $table->string('Email')->unique(); // Cột Email
            $table->string('Password'); // Cột Password
            $table->string('Role'); // Cột Role
            $table->string('Phone')->nullable(); // Cột Phone, có thể để trống
            $table->rememberToken(); // Cột để lưu thông tin nhớ đăng nhập
            $table->timestamps(); // Cột thời gian tạo và cập nhật
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Email là khóa chính
            $table->string('token'); // Token cho việc đặt lại mật khẩu
            $table->timestamp('created_at')->nullable(); // Thời gian tạo token
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // ID phiên
            $table->foreignId('user_id')->nullable()->index(); // ID người dùng
            $table->string('ip_address', 45)->nullable(); // Địa chỉ IP
            $table->text('user_agent')->nullable(); // Thông tin user agent
            $table->longText('payload'); // Payload cho phiên
            $table->integer('last_activity')->index(); // Thời gian hoạt động cuối
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users'); // Xóa bảng users
    }
};
