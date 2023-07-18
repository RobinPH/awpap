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
        Schema::create('articles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title', 256);
            $table->string('author', 128);
            $table->dateTime('date_published');
            $table->string('description', 2048);

            $table->uuid("thumbnail_id")->nullable();
            $table->foreign('thumbnail_id')->references('id')->on('images')->onDelete("cascade");

            $table->string('link');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
