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
        Schema::create('candidate_info', function (Blueprint $table) {
            $table->id();
            $table->string('floor');
            $table->string('profession');
            $table->string('specialization');
            $table->string('city_candidate');
            $table->text('description');
            $table->unsignedBigInteger('files_candidate_id');
            $table->unsignedBigInteger('photo_id');

            $table->foreignId('candidate_full_name_id')->constrained('candidate_full_name');

            $table->foreign('files_candidate_id')->references('id')->on('files');
            $table->foreign('photo_id')->references('id')->on('files');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_info');
    }
};
