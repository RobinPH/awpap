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
        Schema::create('adoption_stories', function (Blueprint $table) {
            $table->uuid("id")->primary();

            // $table->uuid("animal_id")->nullable();
            // $table->foreign('animal_id')->references('id')->on('animals')->onDelete("cascade");

            // $table->uuid("user_id")->nullable();
            // $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");

            $table->uuid("adoption_id")->nullable();
            $table->foreign('adoption_id')->references('id')->on('adoption_forms')->onDelete("cascade");

            $table->string("title", 128);

            $table->string("story", 4096);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoption_stories');
    }
};
