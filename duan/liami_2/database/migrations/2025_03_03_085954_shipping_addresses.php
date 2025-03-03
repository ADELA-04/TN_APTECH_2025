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
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id('AddressID');
            $table->foreignId('CustomerID')->constrained('customers','CustomerID')->onDelete('CASCADE');
            $table->string('Phone', 15)->nullable();
            $table->string('Country', 255)->nullable();
            $table->string('City', 255)->nullable();
            $table->string('District', 255)->nullable();
            $table->string('Comune', 255)->nullable();
            $table->string('AddressDetail', 255)->nullable();
            $table->string('Email', 100)->nullable();
            $table->boolean('IsPickupAddress')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_addresses');
    }
};
