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
            $table->string('city_organization');
            $table->integer('number_employees');
            $table->integer('number_students')->nullable();
            $table->text('description');
            $table->text('description_mini');

            $table->foreignId('employer_id')->constrained('employers');
            $table->foreignId('vacancy_id')->constrained('vacancies');
            $table->foreignId('photo_id')->nullable()->constrained('photos');
            $table->foreignId('file_organization_id')->nullable()->constrained('files');
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
