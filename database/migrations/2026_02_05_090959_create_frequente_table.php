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
        Schema::create('frequente', function (Blueprint $table) {
            $table->foreignId('id_employe')->constrained('employes');
            $table->foreignId('id_campuses')->constrained('campuses');
            $table->primary(['id_employe','id_campuses']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frequente');
    }
};
