<?php

namespace App\Imports;

use App\Models\Stagiaire;
use Maatwebsite\Excel\Concerns\ToModel;

class StagiaireImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return Stagiaire::updateOrCreate(
            ['Cin' => $row[0]], // Update if 'Cin' exists, otherwise insert
            [
                'Nom' => $row[4],
                'Prenom' => $row[5],
                // ... (other fields)
            ]
        );
    }
}
