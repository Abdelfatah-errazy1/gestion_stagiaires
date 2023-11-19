<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbsenceSeeder extends Seeder
{
    public function run()
    {
        DB::table('absences')->insert([
            'Cin_Stagiaire' => '1234567890', // Référence à un stagiaire existant
            // Ajoutez d'autres colonnes d'absence si nécessaire
        ]);

        DB::table('absences')->insert([
            'Cin_Stagiaire' => '1234567890', // Référence à un stagiaire existant
            // Ajoutez d'autres colonnes d'absence si nécessaire
        ]);

        // Ajoutez d'autres enregistrements si nécessaire
    }
}
