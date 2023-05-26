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
        Schema::create('candidates_info', function (Blueprint $table) {
            $table->id();
            $table->string('floor');
            $table->string('profession');
            $table->string('specialization');
            $table->string('city_candidate');
            $table->text('description');
            $table->unsignedBigInteger('file_candidate_id')->nullable();
            $table->unsignedBigInteger('photo_id')->nullable();

            $table->foreignId('candidate_full_name_id')->constrained('candidates_full_name');

            $table->foreign('file_candidate_id')->references('id')->on('files');
            $table->foreign('photo_id')->references('id')->on('photos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates_info');
    }
};
