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
        Schema::create('settings', function (Blueprint $table) {
            $table->id('SettingID');
            $table->string('Logo')->nullable();
            $table->string('Favicon')->nullable();
            $table->string('NavigationLink')->nullable();
            $table->string('BusinessName')->nullable();
            $table->string('EmailBusiness')->nullable();
            $table->string('AddressBusiness')->nullable();
            $table->string('Hotline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
