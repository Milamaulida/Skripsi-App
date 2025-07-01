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
            $table->integer('class_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('identification_number')->unique();
            $table->string('password');
            $table->integer('phone');
            $table->integer('role_id');
            $table->string('status');
            $table->date('birth_date');
            $table->string('address');
            $table->string('image_path');
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
