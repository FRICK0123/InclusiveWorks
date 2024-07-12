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
        Schema::create('jobpostings', function (Blueprint $table) {
            $table->string('jobID')->primary();
            $table->string('company-logo');
            $table->string('company-name');
            $table->string('company-industry');
            $table->string('company-address');
            $table->string('job-title');
            $table->text('job-description');
            $table->integer('salary-range-start');
            $table->integer('salary-range-end');
            $table->string('salary-frequency');
            $table->string('employment-type');
            $table->string('education-level');
            $table->string('experience-level');
            $table->string('skills');
            $table->string('disablities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobpostings');
    }
};
