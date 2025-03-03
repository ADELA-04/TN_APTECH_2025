<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineStoreTables extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('CustomerID');
            $table->string('Username')->unique();
            $table->string('FullName')->nullable();
            $table->string('Email')->unique();
            $table->string('Phone', 15)->nullable();
            $table->string('PasswordHash');
            $table->enum('Gender', ['Male', 'Female', 'Other'])->nullable();
            $table->string('ProfilePicture')->nullable();
            $table->timestamps(0);
        });


        Schema::create('product_attributes', function (Blueprint $table) {
            $table->id('AttributeID');
            $table->string('AttributeName');
        });

        Schema::create('product_attribute_values', function (Blueprint $table) {
            $table->id('ValueID');
            $table->foreignId('AttributeID')->constrained('product_attributes')->onDelete('CASCADE');
            $table->string('Value');
        });

        Schema::create('product_attribute_mapping', function (Blueprint $table) {
            $table->id('MappingID');
            $table->foreignId('ProductID')->constrained('products')->onDelete('CASCADE');
            $table->foreignId('ValueID')->constrained('product_attribute_values')->onDelete('CASCADE');
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id('OrderID');
            $table->foreignId('CustomerID')->constrained('customers')->onDelete('CASCADE');
            $table->decimal('TotalAmount', 10, 2);
            $table->enum('OrderStatus', ['Pending', 'Completed', 'Cancelled']);
            $table->timestamps(0);
            $table->enum('PaymentMethod', ['COD', 'Bank Transfer'])->default('COD');
            $table->foreignId('CODStatusID')->nullable()->constrained('cod_statuses', 'CODStatusID')->onDelete('SET NULL');
        });

        Schema::create('order_details', function (Blueprint $table) {
            $table->id('OrderDetailID');
            $table->foreignId('OrderID')->constrained('orders')->onDelete('CASCADE');
            $table->foreignId('ProductID')->constrained('products')->onDelete('CASCADE');
            $table->integer('Quantity');
            $table->decimal('Price', 10, 2);
        });

        Schema::create('purchase_reviews', function (Blueprint $table) {
            $table->id('PurchaseReviewID');
            $table->foreignId('OrderDetailID')->constrained('order_details')->onDelete('CASCADE');
            $table->integer('Rating')->check('Rating BETWEEN 1 AND 5');
            $table->text('Comment')->nullable();
            $table->timestamps(0);
        });


        // Các bảng khác vẫn giữ nguyên
        Schema::create('settings', function (Blueprint $table) {
            $table->id('SettingID');
            $table->string('BusinessName', 100)->nullable();
            $table->string('Phone', 15)->nullable();
            $table->string('Address', 255)->nullable();
            $table->string('Email', 100)->nullable();
            $table->decimal('DefaultWeight', 10, 2)->nullable();
        });

        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id('AddressID');
            $table->foreignId('CustomerID')->constrained('customers')->onDelete('CASCADE');
            $table->string('Phone', 15)->nullable();
            $table->string('Country', 255)->nullable();
            $table->string('City', 255)->nullable();
            $table->string('District', 255)->nullable();
            $table->string('Comune', 255)->nullable();
            $table->string('AddressDetail', 255)->nullable();
            $table->string('Email', 100)->nullable();
            $table->boolean('IsPickupAddress')->default(0);
        });

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

        Schema::create('shipping_statuses', function (Blueprint $table) {
            $table->id('StatusID');
            $table->string('StatusName', 100);
            $table->text('Description')->nullable();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id('TransactionID');
            $table->foreignId('CustomerID')->constrained('customers')->onDelete('CASCADE');
            $table->foreignId('OrderID')->nullable()->constrained('orders')->onDelete('NO ACTION');
            $table->decimal('Amount', 10, 2);
            $table->timestamps(0);
        });

        Schema::create('sales_reports', function (Blueprint $table) {
            $table->id('ReportID');
            $table->foreignId('ProductID')->constrained('products')->onDelete('CASCADE');
            $table->integer('TotalSales');
            $table->integer('QuantitySold');
            $table->timestamps(0);
        });

        Schema::create('inventory_history', function (Blueprint $table) {
            $table->id('InventoryID');
            $table->foreignId('ProductID')->constrained('products')->onDelete('CASCADE');
            $table->integer('ChangeAmount');
            $table->timestamps(0);
            $table->foreignId('OrderID')->nullable()->constrained('orders')->onDelete('SET NULL');
            $table->dateTime('EntryDate')->nullable();
            $table->string('ItemType')->nullable();
        });

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

        Schema::create('cod_statuses', function (Blueprint $table) {
            $table->id('CODStatusID');
            $table->string('StatusName', 100);
            $table->text('Description')->nullable();
        });

        Schema::create('banners', function (Blueprint $table) {
            $table->id('BannerID');
            $table->string('Title');
            $table->string('ImageURL');
            $table->string('Link')->nullable();
            $table->dateTime('StartDate')->nullable();
            $table->dateTime('EndDate')->nullable();
            $table->timestamps(0);
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
        Schema::dropIfExists('banners');
        Schema::dropIfExists('cod_statuses');
        Schema::dropIfExists('shipping_details');
        Schema::dropIfExists('inventory_history');
        Schema::dropIfExists('sales_reports');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('shipping_statuses');
        Schema::dropIfExists('shipping_providers');
        Schema::dropIfExists('shipping_addresses');
        Schema::dropIfExists('settings');

        Schema::dropIfExists('purchase_reviews');
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('product_attribute_mapping');
        Schema::dropIfExists('product_attribute_values');
        Schema::dropIfExists('product_attributes');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('blog_posts'); // Đảm bảo xóa bảng blog_posts trong phương thức down
        Schema::dropIfExists('customers');
    }
}
