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
        Schema::create('education', function (Blueprint $table) {
            $table->timestamps();
            $table->uuid('id')->primary();
            $table->foreignUuid('candidate_id');
            $table->foreignUuid('job_id');
            // $table->string('job_id');
            $table->string('edu_institute_name');
            $table->string('start_year');
            $table->string('end_year');
            $table->string('edu_level');
            $table->string('edu_course_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
