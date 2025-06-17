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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('OrderID');
            $table->foreignId('CustomerID')->constrained('customers','CustomerID');
            $table->decimal('TotalAmount', 10, 2);
            $table->enum('OrderStatus', ['Chờ xác nhận', 'Đã xác nhận', 'Chờ đơn vị vận chuyển','Đã bàn giao cho đơn vị vận chuyển','Đang giao hàng','Đã giao','Đã hủy']);
            $table->timestamps(0);
            $table->enum('PaymentMethod', ['COD', 'Bank Transfer'])->default('COD');
            $table->string('Notes');
            $table->string('Address');
            $table->string('Phone');
             $table->string('ShippingCode');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
