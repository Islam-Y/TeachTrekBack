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
        Schema::create('organizations_social', function (Blueprint $table) {
            $table->id();
            $table->string('social_links');
            $table->integer('phone_number');
            $table->string('address');

            $table->foreignId('organization_id')->constrained('organizations');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations_social');
    }
};
