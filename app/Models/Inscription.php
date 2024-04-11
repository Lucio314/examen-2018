<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'Idadh',
        'annee',
        'dateinscription',
        'domaine',
    ];

    // Définir une clé primaire composée
    protected $primaryKey = ['Idadh', 'annee'];
    public $incrementing = false;

 
    public function adherent()
    {
        return $this->belongsTo(Adherent::class, 'Idadh', 'Idadh');
    }
}
