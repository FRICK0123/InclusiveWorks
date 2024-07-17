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
        Schema::create('pendingjobs', function (Blueprint $table) {
            $table->id('pending_job_id');
            $table->string('jobID');
            $table->integer('pwdID');
            $table->text('cover_letter');
            $table->string('pwd_resume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendingjobs');
    }
};
