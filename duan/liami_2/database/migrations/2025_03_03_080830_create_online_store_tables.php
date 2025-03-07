<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineStoreTables extends Migration
{
    public function up()
    {















        // Các bảng khác vẫn giữ nguyên














        Schema::create('shipping_details', function (Blueprint $table) {
            $table->id('ShippingID');
            $table->foreignId('OrderID')->constrained('orders')->onDelete('CASCADE');
            $table->foreignId('ProviderID')->constrained('shipping_providers')->onDelete('CASCADE');
            $table->string('TrackingNumber')->nullable();
            $table->dateTime('ShippingDate')->nullable();
            $table->dateTime('DeliveryDate')->nullable();
            $table->decimal('ShippingCost', 10, 2);
            $table->enum('Status', ['Pending', 'Shipped', 'Delivered', 'Returned']);
            $table->foreignId('ShippingStatusID')->nullable()->constrained('shipping_statuses')->onDelete('SET NULL');
        });





        Schema::create('header', function (Blueprint $table) {
            $table->id('HeaderID');
            $table->string('Title');
            $table->string('LogoURL')->nullable();
            $table->text('NavigationLinks')->nullable();
            $table->timestamps(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('header');


        Schema::dropIfExists('shipping_details');












       // Đảm bảo xóa bảng blog_posts trong phương thức down

    }
}
