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
        Schema::create('organization', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->unsignedBigInteger('employer_id');
            $table->string('city_organization');
            $table->unsignedBigInteger('vacancies_id');
            $table->unsignedBigInteger('photo_id');
            $table->integer('number_employees');
            $table->integer('number_students');
            $table->text('description');
            $table->text('description_mini');
            $table->unsignedBigInteger('files_organization_id');

            $table->foreign('employer_id')->references('id')->on('employer');
            $table->foreign('vacancies_id')->references('id')->on('vacancy');
            $table->foreign('photo_id')->references('id')->on('photo');
            $table->foreign('files_organization_id')->references('id')->on('files_organization');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization');
    }
};
