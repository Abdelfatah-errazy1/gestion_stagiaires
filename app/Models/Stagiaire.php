<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Stagiaire extends Model
{
    protected $primaryKey = 'Cin';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'Cin', 'Date_naissance', 'Mail', 'Nom', 'Prenom', 'Qualite', 'Tel', 'Etablissement',
    ];

    // Relations
    public function stages()
    {
        return $this->hasMany(Stage::class, 'Cin_Stagiaire', 'Cin');
    }

    public function absences()
    {
        return $this->hasMany(Absence::class, 'Cin_Stagiaire');
    }
}
