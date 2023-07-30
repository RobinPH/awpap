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
        Schema::create('web_traffic', function (Blueprint $table) {
            $table->uuid("id")->primary();

            $table->ipAddress("ip");
            $table->string("country", 128)->nullable();
            $table->string("city", 128)->nullable();
            $table->string("latitude", 64)->nullable();
            $table->string("longitude", 64)->nullable();
            $table->string("user_agent", 512)->nullable();
            $table->string("url", 2048);
            $table->string("query", 2048)->nullable();
            $table->string("ref", 256)->nullable();
            $table->string("referer", 256)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_traffic');
    }
};
