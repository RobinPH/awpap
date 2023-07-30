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
        Schema::create('adoption_forms', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->uuid('animal_id');
            $table->foreign('animal_id')->references('id')->on('animals')->onDelete('cascade');

            $table->string("prompted_to_adopt", 1024);
            $table->string("adopted_before", 1024);
            $table->string("to_adopt_a_specific_shelter_animal", 1024);
            $table->string("describe_ideal", 1024);
            $table->string("type_of_building", 1024);
            $table->string("happens_to_pet", 1024);
            $table->string("live_with", 1024);
            $table->string("allergic_to_animals", 1024);
            $table->string("responsible", 1024);
            $table->string("financially_responsible", 1024);
            $table->string("average_workday", 1024);
            $table->string("steps_to_introduce", 1024);
            $table->string("everyone_supports", 1024);

            $table->uuid('adoption_form_status_id');
            $table->foreign('adoption_form_status_id')->references('id')->on('adoption_form_statuses')->onDelete('cascade');

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoption_forms');
    }
};
