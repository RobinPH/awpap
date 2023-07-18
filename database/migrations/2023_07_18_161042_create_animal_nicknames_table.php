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
        Schema::create('animal_nicknames', function (Blueprint $table) {
            $table->uuid("id")->primary();

            $table->string("nickname", 64);

            $table->uuid("animal_id")->nullable();
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_nicknames');
    }
};
