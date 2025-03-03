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
        Schema::create('apparence', function (Blueprint $table) {
            $table->id('ApparenceID'); // Sử dụng kiểu bigint cho ID
            $table->string('Title'); // Tiêu đề
            $table->string('LogoURL')->nullable(); // URL logo
            $table->string('FaviconURL')->nullable(); // URL favicon
            $table->text('NavigationLinks')->nullable(); // Liên kết điều hướng
            $table->timestamps(); // Thêm cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apparence');
    }
};
