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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email', 255);
            $table->string('contact');
            // Ajout de la colonne 'department_id' avant de définir la clé étrangère
            $table->unsignedBigInteger('depatement_id');
            // Définition de la clé étrangère
            $table->foreign('depatement_id')->references('id')->on('depatements');
            $table->integer('montant_journalier')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
