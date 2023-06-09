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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('salary');
            $table->string('city_vacancy');
            $table->string('underground')->nullable();
            $table->text('description');
            $table->text('duties');
            $table->text('requirements');
            $table->text('advantages_vacancy');

            $table->foreignId('employer_id')->constrained('employers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
