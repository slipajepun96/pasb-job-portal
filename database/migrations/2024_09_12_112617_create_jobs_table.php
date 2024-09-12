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
        Schema::create('jobs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->string('job_ads_title');
            $table->string('job_location');
            $table->string('job_description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('ads_link');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job');
    }
};
