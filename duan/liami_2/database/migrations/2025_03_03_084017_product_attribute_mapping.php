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
        Schema::create('product_attribute_mapping', function (Blueprint $table) {
            $table->id('MappingID');
            $table->foreignId('ProductID')->constrained('products','ProductID');
            $table->foreignId('ValueID')->constrained('product_attribute_values','ValueID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_attribute_mapping');
    }
};
