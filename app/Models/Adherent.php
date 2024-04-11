<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    use HasFactory;

    // Specify the primary key field
    protected $primaryKey = 'Idadh';

    // Specify the fields that can be filled with mass assignment
    protected $fillable = [
        'nom',
        'prenom',
        'datnais',
        'ville',
        'sexe'
    ];

    // Define the relationship to Inscription
    public function inscription()
    {
        return $this->hasMany(Inscription::class, 'Idadh');
    }
}
