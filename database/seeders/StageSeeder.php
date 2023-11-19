<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StageSeeder extends Seeder
{
    public function run()
    {
        DB::table('stages')->insert([
            'Cin_Stagiaire' => '1234567890', // Référence à un stagiaire existant
            'Date_D' => Carbon::now()->subDays(30),
            'Date_F' => Carbon::now()->addDays(30),
            'Sujet_Stage' => 'Sujet du stage 1',
            'Division' => 'Division A',
            'Nom_enc' => 'Encadrant1',
            'Prenom_enc' => 'PrenomEncadrant1',
            'Tel_enc' => '0123456789',
        ]);

        DB::table('stages')->insert([
            'Cin_Stagiaire' => '1234567890', // Référence à un stagiaire existant
            'Date_D' => Carbon::now()->subDays(15),
            'Date_F' => Carbon::now()->addDays(45),
            'Sujet_Stage' => 'Sujet du stage 2',
            'Division' => 'Division B',
            'Nom_enc' => 'Encadrant2',
            'Prenom_enc' => 'PrenomEncadrant2',
            'Tel_enc' => '9876543210',
        ]);

        // Ajoutez d'autres enregistrements si nécessaire
    }
}