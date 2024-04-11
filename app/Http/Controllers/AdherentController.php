<?php

namespace App\Http\Controllers;

use App\Models\Adherent;
use App\Models\Inscription;
use Illuminate\Http\Request;

class AdherentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Récupérer les valeurs distinctes des domaines et des années
        $domaines = Inscription::distinct()->pluck('domaine');
        $annees = Inscription::distinct()->pluck('annee');

        // Vérifier si les paramètres 'domaine' et 'annee' sont présents dans la requête
        if ($request->has('domaine') && $request->has('annee')) {
            // Filtrer les adhérents en fonction du domaine et de l'année
            $adherents = Adherent::whereHas('inscription', function ($query) use ($request) {
                $query->where('domaine', $request->input('domaine'))
                    ->where('annee', $request->input('annee'));
            })->get();
        } else {
            // Si les paramètres ne sont pas présents, initialiser la variable $adherents à null
            $adherents = null;
        }

        // Retourner la vue 'adherents.index' avec les données nécessaires
        return view('adherents.index', compact('adherents', 'annees', 'domaines'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return a view with a form for creating a new adherent
        return view('adherents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'datenais' => 'required|date',
            'ville' => 'required|string',
            'sexe' => 'required|in:M,F',
            'annee' => 'required|integer|digits:4',
            'date' => 'required|date',
            'domaine' => 'required|string',
        ]);

        // Create a new Adherent instance
        $adherent = new Adherent();
        $adherent->nom = $request->nom;
        $adherent->prenom = $request->prenom;
        $adherent->datenais = $request->datenais;
        $adherent->ville = $request->ville;
        $adherent->sexe = $request->sexe;
        // Save the adherent

        $adherent->save();

        // Create a new Inscription instance
        $inscription = new Inscription();
        $inscription->Idadh = $adherent->Idadh;
        $inscription->annee = $request->annee;
        $inscription->dateinscription = $request->date;
        $inscription->domaine = $request->domaine;
        // Save the inscription
        $inscription->save();

        // Redirect to adherents index with a success message
        return redirect()->route('adherents.index')->with('success', 'Adherent and Inscription created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Adherent $adherent)
    {
        // Return a view to display the adherent's details
        return view('adherents.show', compact('adherent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adherent $adherent)
    {
        // Return a view with a form to edit the adherent's details
        return view('adherents.edit', compact('adherent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adherent $adherent)
    {
        // Validate the input data
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'datenais' => 'required|date',
            'ville' => 'required|string',
            'sexe' => 'required|in:M,F',
        ]);

        // Update adherent's details
        $adherent->nom = $request->nom;
        $adherent->prenom = $request->prenom;
        $adherent->datenais = $request->datenais;
        $adherent->ville = $request->ville;
        $adherent->sexe = $request->sexe;

        // Save changes
        $adherent->save();

        // Redirect to adherents index with a success message
        return redirect()->route('adherents.index')->with('success', 'Adherent updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adherent $adherent)
    {
        // Delete the adherent from the database
        $adherent->delete();

        // Redirect to adherents index with a success message
        return redirect()->route('adherents.index')->with('success', 'Adherent deleted successfully');
    }
}
