<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StagiaireSeeder extends Seeder
{
    public function run()
    {
        DB::table('stagiaires')->insert([
            'Cin' => '1234567890',
            'Date_naissance' => '1990-01-01',
            'Mail' => 'exemple@mail.com',
            'Nom' => 'NomStagiaire',
            'Prenom' => 'PrenomStagiaire',
            'Qualite' => 'Etudiant',
            'Tel' => '0123456789',
            'Etablissement' => 'Universite XYZ',
        ]);

        // Ajoutez d'autres enregistrements si nécessaire
    }
}


