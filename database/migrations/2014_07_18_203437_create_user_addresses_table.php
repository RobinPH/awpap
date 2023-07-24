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
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->uuid("id")->primary();

            $table->string("address_line_1", 1024);
            $table->string("address_line_2", 1024)->nullable();

            $table->uuid("region_id");
            $table->foreign('region_id')->references('id')->on('address_regions');

            $table->uuid("province_id");
            $table->foreign('province_id')->references('id')->on('address_provinces');

            $table->uuid("municipality_id");
            $table->foreign('municipality_id')->references('id')->on('address_municipalities');

            $table->uuid("barangay_id");
            $table->foreign('barangay_id')->references('id')->on('address_barangays');

            $table->string("zip_code", 6);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_addresses');
    }
};
