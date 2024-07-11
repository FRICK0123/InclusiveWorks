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
        Schema::create('jobseekers', function (Blueprint $table) {
            $table->id('pwdID')->startingValue(100);
            $table->string('pwd-firstname');
            $table->string('pwd-lastname');
            $table->string('pwd-email');
            $table->string('pwd-age');
            $table->string('pwd-contact');
            $table->string('pwd-username');
            $table->string('pwd-password');
            $table->string('pwd-address');
            $table->string('pwd-education');
            $table->string('pwd-resume');
            $table->string('pwd-profile');
            $table->string('pwd-disabilities');
            $table->string('usertype');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobseekers');
    }
};
