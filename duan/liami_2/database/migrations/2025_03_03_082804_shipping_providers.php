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
        Schema::create('shipping_providers', function (Blueprint $table) {
            $table->id('ProviderID');
            $table->string('ProviderName', 100);
            $table->string('Token', 255)->nullable();
            $table->string('ClientID', 100)->nullable();
            $table->boolean('IsRecipientPays')->default(1);
            $table->decimal('ShippingCost', 10, 2)->nullable();
            $table->string('EstimatedDeliveryTime', 100)->nullable();
            $table->text('ServiceDetails')->nullable();
            $table->text('DeliveryTimeByRegion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_providers');
    }
};
