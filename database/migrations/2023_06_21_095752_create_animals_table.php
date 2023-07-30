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
        Schema::create('animals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');

            $table->uuid("type_id");
            $table->foreign('type_id')->references('id')->on('animal_types');

            $table->uuid("sex_id");
            $table->foreign('sex_id')->references('id')->on('animal_sexes');

            $table->dateTime("birthdate");
            $table->string('description', 2048)->nullable();

            $table->uuid("thumbnail_id")->nullable();
            $table->foreign('thumbnail_id')->references('id')->on('images')->onDelete("cascade");

            $table->dateTime("adopted_at")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
