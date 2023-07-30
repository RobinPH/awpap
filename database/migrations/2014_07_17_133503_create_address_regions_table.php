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
        if (boolval(env("MIGRATE_ADDRESS_TABLES", true))) {

            Schema::create('address_regions', function (Blueprint $table) {
                $table->uuid("id")->primary();
                $table->integer("real_id")->unique();
                $table->string("name", 255);
                $table->string("description", 255)->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (boolval(env("MIGRATE_ADDRESS_TABLES", true))) {

            Schema::dropIfExists('address_regions');
        }
    }
};
