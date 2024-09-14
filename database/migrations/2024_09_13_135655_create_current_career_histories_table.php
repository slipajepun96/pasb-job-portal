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
        Schema::create('current_career_histories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->foreignUuid('candidate_id');
            $table->foreignUuid('job_id');
            $table->string('current_salary');
            $table->string('current_allowance');
            $table->string('latest_bonus_sum');
            $table->string('latest_bonus_date');
            $table->string('responsible_officer');
            $table->string('num_staff_under');
            $table->string('resign_period');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('current_career_histories');
    }
};
