<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('BlogID');
            $table->string('Title');
            $table->text('Content');
            $table->string('ImageURL')->nullable();
            $table->boolean('IsVisible')->default(true);
            $table->integer('View')->default(0);
            $table->foreignId('CategoryID')->constrained('categories','CategoryID');
            $table->foreignId('CreatedBy')->constrained('users','UserID');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
}

