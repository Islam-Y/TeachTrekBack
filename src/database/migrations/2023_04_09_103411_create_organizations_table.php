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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->unsignedBigInteger('employer_id');
            $table->string('city_organization');
            $table->unsignedBigInteger('vacancy_id');
            $table->unsignedBigInteger('photo_id')->nullable();
            $table->integer('number_employees');
            $table->integer('number_students')->nullable();
            $table->text('description');
            $table->text('description_mini');
            $table->unsignedBigInteger('file_organization_id')->nullable();

            $table->foreign('employer_id')->references('id')->on('employers');
            $table->foreign('vacancy_id')->references('id')->on('vacancies');
            $table->foreign('photo_id')->references('id')->on('files');
            $table->foreign('file_organization_id')->references('id')->on('files');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
