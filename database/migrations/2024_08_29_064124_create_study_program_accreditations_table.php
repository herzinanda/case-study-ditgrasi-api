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
        Schema::create('study_program_accreditations', function (Blueprint $table) {
            $table->id();
            $table->string('study_program');
            $table->string('faculty');
            $table->string('degree');
            $table->string('accreditation');
            $table->string('decree');
            $table->string('decree_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_program_accreditations');
    }
};
