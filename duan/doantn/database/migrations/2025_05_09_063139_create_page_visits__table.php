<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('page_visits', function (Blueprint $table) {
            $table->id();
            $table->timestamp('visited_at')->useCurrent();
            $table->integer('count')->default(1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_visits');
    }
};
