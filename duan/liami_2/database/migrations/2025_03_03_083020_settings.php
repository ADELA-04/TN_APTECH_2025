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
            $table->string('BusinessName', 100)->nullable();
            $table->string('BossName', 100)->nullable();
            $table->string('Phone', 15)->nullable();
            $table->string('Address', 255)->nullable();
            $table->string('Email', 100)->nullable();
            $table->decimal('DefaultWeight', 10, 2)->nullable();
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
