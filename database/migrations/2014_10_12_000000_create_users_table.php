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
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone',255)->nullable();
            $table->string('district_id',255)->nullable();
            $table->string('ward_id',255)->nullable();
            $table->string('address',255)->nullable();
            $table->datetime('birthday')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('ip')->nullable();
            $table->string('password');
            $table->rememberToken();
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
