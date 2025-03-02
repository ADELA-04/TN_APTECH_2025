<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('CategoryID'); // Khóa chính
            $table->string('CategoryName'); // Tên danh mục
            $table->boolean('IsVisible')->default(true); // Hiển thị
            $table->foreignId('parent_id')->nullable()->constrained('categories', 'CategoryID')->onDelete('cascade');
             $table->timestamps(); // CreatedAt và UpdatedAt
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
