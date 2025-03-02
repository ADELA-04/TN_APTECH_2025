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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id('PostID'); // Sử dụng kiểu bigint cho PostID
            $table->string('Title'); // Tiêu đề bài viết
            $table->text('Content'); // Nội dung bài viết
            $table->text('Summary')->nullable(); // Tóm tắt bài viết
            $table->string('ImageURL')->nullable(); // URL hình ảnh
            $table->boolean('IsVisible')->default(true); // Trạng thái hiển thị
            $table->integer('views')->default(0); // Trường để lưu số lượt xem
            $table->timestamps(); // Thời gian tạo và cập nhật
            $table->foreignId('AuthorID')->constrained('users', 'UserID'); // Khóa ngoại đến bảng Users
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts'); // Xóa bảng blog_posts
    }
};
