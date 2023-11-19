<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Absence extends Model
{
    protected $fillable = [
        'Cin', 'date_debut','date_fin','justification'
    ];

    // Relations
    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class, 'Cin_Stagiaire');
    }
}
