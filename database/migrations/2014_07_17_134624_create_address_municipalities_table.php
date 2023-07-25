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
        return;
        Schema::create('address_municipalities', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->integer("real_id")->unique();

            $table->uuid("province_id");
            $table->foreign('province_id')->references('id')->on('address_provinces');

            $table->string("name", 255);
            $table->string("description", 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('address_municipalities');
    }
};
