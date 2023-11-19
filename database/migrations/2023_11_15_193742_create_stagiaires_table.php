<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagiairesTable extends Migration
{
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->string('Cin', 10)->primary();
            $table->date('Date_naissance')->nullable();
            $table->string('Mail')->nullable();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Qualite')->nullable();
            $table->string('Tel', 20)->nullable();
            $table->string('Etablissement')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stagiaires');
    }
}