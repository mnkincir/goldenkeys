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
        Schema::create('franchise_applications', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('phone', 20);
            $table->string('email');
            $table->date('birthDate');
            $table->string('education');
            $table->string('city');
            $table->string('district');
            $table->string('street');
            $table->string('sectorExperience')->nullable();
            $table->string('brandExperience')->nullable();
            $table->string('importantFactor');
            $table->string('budget');
            $table->string('ip_address', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('franchise_applications');
    }
};
