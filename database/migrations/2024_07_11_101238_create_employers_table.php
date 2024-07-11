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
        Schema::create('employers', function (Blueprint $table) {
            $table->id('employerID')->startingValue(200);
            $table->string('company');
            $table->string('company-logo');
            $table->string('company-industry');
            $table->string('company-address');
            $table->string('company-email');
            $table->string('company-contact');
            $table->text('company-description');
            $table->string('company-username');
            $table->string('company-password');
            $table->string('business-registration-certificate');
            $table->string('tax-identification-number');
            $table->string('proof-of-physical-address');
            $table->string('official-company-letterhead');
            $table->string('usertype');
            $table->string('verify');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
