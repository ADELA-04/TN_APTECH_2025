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
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductID');
            $table->string('ProductName');
            $table->text('Description')->nullable();
            $table->decimal('Price', 10, 2);
            $table->decimal('SalePrice', 10, 2)->nullable();
            $table->string('Status', 255)->nullable();
            $table->string('Image')->nullable();
            $table->integer('View')->default(0);
            $table->foreignId('CategoryID')->constrained('categories','CategoryID');
            $table->boolean('IsVisible')->default(true);
            $table->timestamps();
            $table->foreignId('CreatedBy')->constrained('users','UserID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
