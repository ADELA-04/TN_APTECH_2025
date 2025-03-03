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
        Schema::create('purchase_reviews', function (Blueprint $table) {
            $table->id('PurchaseReviewID');
            $table->foreignId('OrderDetailID')->constrained('order_details','OrderDetailID')->onDelete('CASCADE');
            $table->integer('Rating')->check('Rating BETWEEN 1 AND 5');
            $table->text('Comment')->nullable();
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_reviews');
    }
};
