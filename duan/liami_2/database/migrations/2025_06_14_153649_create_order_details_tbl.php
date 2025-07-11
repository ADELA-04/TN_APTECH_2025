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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('OrderDetailID');
            $table->foreignId('OrderID')->constrained('orders', 'OrderID');
            $table->foreignId('ProductID')->constrained('products', 'ProductID');
            $table->integer('Quantity');
            $table->decimal('Price', 10, 2);
            $table->string(column: 'Color')->nullable();
            $table->string(column: 'Size')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
