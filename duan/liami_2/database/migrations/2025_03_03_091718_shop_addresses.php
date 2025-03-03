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
        Schema::create('shop_addresses', function (Blueprint $table) {
            $table->id('AddressID'); // Khóa chính
            $table->foreignId('ShopID')->constrained('shops','ShopID')->onDelete('cascade'); // Khóa ngoại đến bảng shops
            $table->string('AddressLine1'); // chi tiết
            $table->string('Comune'); // xã
            $table->string('City'); // Thành phố
            $table->string('District'); // Quận/Huyện
            $table->string('Country'); // Quốc gia
            $table->timestamps(); // Thêm cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_addresses');
    }
};
