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
            $table->string('phone', 11)->unique()->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            $table->uuid("address_id")->nullable();
            $table->foreign('address_id')->references('id')->on('user_addresses');

            $table->uuid("profile_picture_id")->nullable();
            $table->foreign('profile_picture_id')->references('id')->on('images')->onDelete("cascade");

            $table->string("occupation", 128)->nullable();
            $table->string("social_media", 128)->nullable();

            $table->string("google_id")->nullable();
            $table->string("facebook_id")->nullable();
            $table->string("twitter_id")->nullable();

            $table->date("birthdate")->nullable();
            $table->enum("civil_status", ['SINGLE', "MARRIED", "SEPARATED", "DIVORCED"])->nullable();
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
