<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Stage extends Model
{
    protected $fillable = [
        'Cin_Stagiaire', 'Date_D', 'Date_F', 'Sujet_Stage', 'Division', 'Nom_enc', 'Prenom_enc', 'Tel_enc',
    ];

    // Relations
    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class, 'Cin_Stagiaire');
    }
}
