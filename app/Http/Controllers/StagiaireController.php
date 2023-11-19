<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('pages.stagiaires.index', compact('stagiaires'));
    }

    public function create()
    {
        return view('pages.stagiaires.create');
    }

    public function show(Stagiaire $stagiaire)
    {
        return view('pages.stagiaires.show', compact('stagiaire'));
    }

    public function edit($id)
    {
        $stagiaire=Stagiaire::find($id);
        return view('pages.stagiaires.edit', compact('stagiaire'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Cin' => 'required|string|max:10|unique:stagiaires,Cin',
            'Date_naissance' => 'nullable|date',
            'Mail' => 'nullable|email',
            'Nom' => 'required|string',
            'Prenom' => 'required|string',
            'Qualite' => 'nullable|string',
            'Tel' => 'nullable|string|max:20',
            'Etablissement' => 'nullable|string',
        ]);

        $stagiaire = Stagiaire::create($validatedData);
        return redirect()->route('stagiaires.index');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Cin' => ['required', 'string', 'max:10', Rule::unique('stagiaires')->ignore($id)],
            'Date_naissance' => 'nullable|date',
            'Mail' => 'nullable|email',
            'Nom' => 'required|string',
            'Prenom' => 'required|string',
            'Qualite' => 'nullable|string',
            'Tel' => 'nullable|string|max:20',
            'Etablissement' => 'nullable|string',
        ]);

        $stagiaire = Stagiaire::findOrFail($id);
        $stagiaire->update($validatedData);
        return redirect()->route('stagiaires.index');
    }

    public function destroy($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        $stagiaire->delete();
        return redirect()->route('stagiaires.index');
    }
}

