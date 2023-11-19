<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('Cin_Stagiaire', 10);
            $table->foreign('Cin_Stagiaire')->references('Cin')->on('stagiaires');
            $table->date('Date_D')->nullable();
            $table->date('Date_F')->nullable();
            $table->text('Sujet_Stage')->nullable();
            $table->string('Division')->nullable();
            $table->string('Nom_enc')->nullable();
            $table->string('Prenom_enc')->nullable();
            $table->string('Tel_enc', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stages');
    }
}