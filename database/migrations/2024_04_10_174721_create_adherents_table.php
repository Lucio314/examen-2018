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
        Schema::create('adherents', function (Blueprint $table) {
            $table->id('Idadh');
            $table->timestamps();
            $table->string('nom');
            $table->string('prenom');
            $table->date('datenais');
            $table->string('ville');
            $table->string('sexe');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adherents');
    }
};
