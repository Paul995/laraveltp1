<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use Illuminate\Http\Request;
use App\Models\Villes;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $etudiants = Etudiants::all(); 
        return view('etudiants', ["etudiants" => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etudiants = Etudiants::all(); 
        $villes = Villes::all();
        return view('create', [ 'villes' => $villes, "etudiant" => $etudiants]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           //validation
        //les messages de validation sont dans dossier lang/validation.php
        $request->validate([
            //      le "name" du input     max caracter length
                        'nom' => 'required|string|max:255',
                        'adresse' => 'required|string|max:255',
                        'telephone' => 'required|string|max:25',
                        'email' => 'required|string|max:255',
                        'date_de_naissance' => 'required|date', 
                        'ville_id' => 'required|integer'
                   
                    ]);
            
            
                    //    mthd create([]) de eloquent fait:
                    //req: insert into tasks ([]) values ([])
                    //res: select * from tasks where id = last inserted
                    $etudiant = Etudiants::create([
                        'nom' => $request->nom,
                        'adresse' => $request->adresse,
                        'telephone' => $request->telephone,
                        'email' => $request->email,
                        'date_de_naissance' => $request->date_de_naissance,
                        'ville_id' => $request->ville_id
                    ]);
            //                                                                 
                    return redirect()->route('etudiants.show', $etudiant->id)->with('success', 'Etudiant created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiants $etudiant)
    {
        //
        return  view('show', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiants $etudiant)
    {
        $villes = Villes::all();

        return  view('edit', [ 'villes' => $villes, 'etudiant' => $etudiant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiants $etudiant)
    {
         //
         $request->validate([
            //      le "name" du input     max caracter length
                        'nom' => 'required|string|max:255',
                        'adresse' => 'required|string|max:255',
                        'telephone' => 'required|string|max:25',
                        'email' => 'required|string|max:255',
                        'date_de_naissance' => 'required|date', 
                        'ville_id' => 'required|integer'
                   
                    ]);
    
            $etudiant->update([
                'nom' => $request->nom,
                'adresse' => $request->adresse,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'date_de_naissance' => $request->date_de_naissance,
                'ville_id' => $request->ville_id
            ]);


    
            return redirect()->route('etudiants.show', $etudiant->id)->with('success', 'Etudiant updated sucessfully');
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiants $etudiant)
    {
        $etudiant->delete();

        return redirect()->route('etudiants.index')->with('sucess', 'etudiant supprime!! sucess');
    }
}
