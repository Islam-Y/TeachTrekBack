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
        Schema::create('candidate_experience', function (Blueprint $table) {
            $table->id();
            $table->string('name_old_company');
            $table->string('position_old_company');
            $table->string('location_old_company');
            $table->integer('start_work');
            $table->integer('end_work');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_experience');
    }
};
