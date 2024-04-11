<?php

namespace Database\Seeders;

use App\Models\Inscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inscription::create([
            'Idadh'=>1,
            'annee'=>2015,
            'dateinscription'=>'15/01/10',
            'domaine'=>'santé',
        ]);
        Inscription::create([
            'Idadh'=>2,
            'annee'=>2015,
            'dateinscription'=>'15/01/11',
            'domaine'=>'santé',
        ]);
        Inscription::create([
            'Idadh'=>1,
            'annee'=>2016,
            'dateinscription'=>'16/01/04',
            'domaine'=>'santé',
        ]);
        Inscription::create([
            'Idadh'=>2,
            'annee'=>2016,
            'dateinscription'=>'16/01/07',
            'domaine'=>'formation',
        ]);
        Inscription::create([
            'Idadh'=>1,
            'annee'=>2017,
            'dateinscription'=>'17/01/05',
            'domaine'=>'assinissement',
        ]);
        Inscription::create([
            'Idadh'=>2,
            'annee'=>2017,
            'dateinscription'=>'17/01/06',
            'domaine'=>'assinissement',
        ]);
        Inscription::create([
            'Idadh'=>3,
            'annee'=>2017,
            'dateinscription'=>'17/01/10',
            'domaine'=>'santé',
        ]);
    }
}
