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
        Schema::create('program_form_images', function (Blueprint $table) {
            $table->uuid("id")->primary();

            $table->uuid('program_form_id');
            $table->foreign('program_form_id')->references('id')->on('program_forms')->onDelete('cascade');

            $table->uuid('image_id');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_form_images');
    }
};
