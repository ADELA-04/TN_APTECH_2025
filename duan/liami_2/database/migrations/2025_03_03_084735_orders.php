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
            $table->enum('OrderStatus', ['Pending', 'Completed', 'Cancelled']);
            $table->timestamps(0);
            $table->enum('PaymentMethod', ['COD', 'Bank Transfer'])->default('COD');
            $table->foreignId('CODStatusID')->nullable()->constrained('cod_statuses', 'CODStatusID');
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
