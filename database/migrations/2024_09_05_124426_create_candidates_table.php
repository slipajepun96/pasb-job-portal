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
        Schema::create('candidates', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('job_id');
            $table->timestamps();
            $table->string('name');
            $table->string('birthdate');
            $table->string('gender');
            $table->string('race');
            $table->string('age');
            $table->string('ic_num');
            $table->string('marital_status');
            $table->string('fixed_address');
            $table->string('mail_address');
            $table->string('phone_tel_num');
            $table->string('home_tel_num');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
