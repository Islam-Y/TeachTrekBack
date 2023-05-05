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
        Schema::create('candidate_social', function (Blueprint $table) {
            $table->id();
            $table->string('social_links');
            $table->string('email');
            $table->integer('phone_number');
            $table->string('address');

            $table->integer('candidate_full_name_id')->unsigned()->default(1);

            $table->foreign('candidate_full_name_id')->references('id')->on('candidate_full_name');
            $table->foreign('email')->references('email')->on('candidate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_social');
    }
};
