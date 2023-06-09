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
        Schema::create('candidates_education', function (Blueprint $table) {
            $table->id();
            $table->string('name_educational_university');
            $table->string('location_educational_university');
            $table->string('institute');
            $table->integer('year_of_release');

            $table->foreignId('candidate_full_name_id')->constrained('candidates_full_name');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates_education');
    }
};
