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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->primary(['Idadh', 'annee']);
            $table->year('annee');
            $table->unsignedBigInteger('Idadh');
            $table->foreign('Idadh')->references('Idadh')->on('adherents')->onDelete('cascade');
            $table->string('dateinscription');
            $table->string('domaine');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
