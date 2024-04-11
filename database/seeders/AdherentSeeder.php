<?php

namespace Database\Seeders;

use App\Models\Adherent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdherentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Adherent::create([
            'nom' => 'ADIMI',
            'prenom' => 'Jean',
            'datenais' => '97/08/10',
            'ville' => 'Cotonou',
            'sexe' => 'M'
        ]);
        Adherent::create([
            'nom' => 'SOGLO',
            'prenom' => 'Bernard',
            'datenais' => '94/09/12',
            'ville' => 'Porto-Novo',
            'sexe' => 'M'
        ]);
        Adherent::create([
            'nom' => 'DOSSOU',
            'prenom' => 'Chantal',
            'datenais' => '95/12/04',
            'ville' => 'Cotonou',
            'sexe' => 'F'
        ]);
    }
}
