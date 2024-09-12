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
        Schema::create('relatives', function (Blueprint $table) {
            // $table->id();
            $table->timestamps();
            $table->uuid('id')->primary();
            $table->foreignUuid('candidate_id');
            $table->foreignUuid('job_id');
            // $table->string('job_id');
            $table->string('name');
            $table->string('relationship');
            $table->string('age');
            $table->string('occupation');
            $table->string('company_name');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relatives');
    }
};
