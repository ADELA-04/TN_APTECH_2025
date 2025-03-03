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
        Schema::create('shops', function (Blueprint $table) {
            $table->id('ShopID'); // Khóa chính
            $table->string('ShopName'); // Tên cửa hàng
            $table->string('OwnerName')->nullable(); // Tên chủ sở hữu
            $table->string('Email')->unique(); // Email cửa hàng
            $table->string('Phone', 15)->nullable(); // Số điện thoại
            $table->text('Description')->nullable(); // Mô tả cửa hàng
            $table->timestamps(); // Thêm cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
