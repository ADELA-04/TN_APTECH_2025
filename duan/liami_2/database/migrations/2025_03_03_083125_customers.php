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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
