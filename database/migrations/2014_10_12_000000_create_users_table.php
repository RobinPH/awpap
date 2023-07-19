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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');

            $table->uuid("address_id");
            $table->foreign('address_id')->references('id')->on('user_addresses');

            $table->uuid("profile_picture_id")->nullable();
            $table->foreign('profile_picture_id')->references('id')->on('images')->onDelete("cascade");

            $table->date("birthdate");
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->dateTime("deleted_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
