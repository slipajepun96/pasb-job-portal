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
        Schema::create('other_information', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->foreignUuid('candidate_id');
            $table->foreignUuid('job_id');
            $table->string('bm_status');
            $table->string('bi_status');
            $table->string('other_language_name')->nullable();
            $table->string('other_language_status')->nullable();
            $table->string('drug_status');
            $table->string('drug_description')->nullable();
            $table->string('bankcrupt_status');
            $table->string('bankcrupt_description')->nullable();
            $table->string('business_status');
            $table->string('business_description')->nullable();
            $table->string('license_status');
            $table->string('license_description')->nullable();
            $table->string('smoking_status');
            $table->string('drinking_status');
            $table->string('illness_status');
            $table->string('illness_description')->nullable();
            $table->string('physical_status');
            $table->string('physical_description')->nullable();
            $table->string('pregnancy_status')->nullable();
            $table->string('pregnancy_description')->nullable();
            $table->string('ref1_name');
            $table->string('ref1_phone_num');
            $table->string('ref1_company');
            $table->string('ref1_designation');
            $table->string('ref2_name')->nullable();
            $table->string('ref2_phone_num')->nullable();
            $table->string('ref2_company')->nullable();
            $table->string('ref2_designation')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('other_information');
    }
};
