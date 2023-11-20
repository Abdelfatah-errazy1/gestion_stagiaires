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
            $table->string('Cin', 10);
            $table->foreign('Cin')->references('Cin')->on('stagiaires')->cascadeOnDelete();
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