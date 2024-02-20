<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
        return  view('edit', ['etudiant' => $etudiant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiants $etudiants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etudiants $etudiants)
    {
        //
    }
}
