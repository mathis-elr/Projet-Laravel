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
        Schema::create('trajet', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_time_depart');
            $table->dateTime('date_time_arrive');
            $table->foreignId('id_campuses_depart')->constrained('campuses');
            $table->foreignId('id_campuses_arrivee')->constrained('campuses');
            $table->foreignId('id_voiture')->constrained('voiture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajet');
    }
};
