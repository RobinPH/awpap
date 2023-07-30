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
        Schema::create('program_forms', function (Blueprint $table) {
            $table->uuid("id")->primary();

            $table->uuid("user_id")->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");

            $table->uuid("type_id")->nullable();
            $table->foreign('type_id')->references('id')->on('animal_types')->onDelete("cascade");

            $table->uuid("status_id")->nullable();
            $table->foreign('status_id')->references('id')->on('program_form_statuses')->onDelete("cascade");

            $table->string("breed", 128);
            $table->integer("how_many");
            $table->uuid("program_id")->nullable();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete("cascade");
            $table->date("appointment_date");
            $table->string("other_information", 1024);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_forms');
    }
};
