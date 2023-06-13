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
        // Création de la table 'series'
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('auteur');
            $table->smallInteger('nombre_volumes');
            $table->date('date_premiere_parution');
            $table->string('couverture');
            $table->boolean('serie_finie');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // Création de la table 'personnages'
        Schema::create('personnages', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('serie_id');
            $table->string('type');
            $table->string('description');
            $table->foreign('serie_id')->references('id')->on('series');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnages');
        Schema::dropIfExists('series');
    }
};
