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
        Schema::create('inventory_history', function (Blueprint $table) {
            $table->id('InventoryID');
            $table->foreignId('ProductID')->constrained('products','ProductID')->onDelete('CASCADE');
            $table->integer('ChangeAmount');
            $table->timestamps(0);
            $table->foreignId('OrderID')->nullable()->constrained('orders','OrderID')->onDelete('SET NULL');
            $table->dateTime('EntryDate')->nullable();
            $table->string('ItemType')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_history');
    }
};
