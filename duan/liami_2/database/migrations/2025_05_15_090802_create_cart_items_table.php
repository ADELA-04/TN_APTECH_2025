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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id('CartItemID'); // Khóa chính
            $table->foreignId('CartID')->constrained('carts', 'CartID'); // Khóa ngoại đến bảng Carts
            $table->foreignId('ProductID')->constrained('products', 'ProductID'); // Khóa ngoại đến bảng Products
            $table->integer('Quantity'); // Số lượng
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
