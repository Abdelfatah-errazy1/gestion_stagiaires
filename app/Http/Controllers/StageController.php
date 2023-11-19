<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;

class StageController extends Controller
{
    public function index()
    {
        $stages = Stage::all();
        return view('pages.stages.index', compact('stages'));
    }

    public function create()
    {
        return view('pages.stages.create');
    }

    public function show(Stage $stage)
    {
        return view('pages.stages.show', compact('stage'));
    }

    public function edit(Stage $stage)
    {
        return view('pages.stages.edit', compact('stage'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Cin_Stagiaire' => 'required|string|max:10|exists:stagiaires,Cin',
            'Date_D' => 'nullable|date',
            'Date_F' => 'nullable|date',
            'Sujet_Stage' => 'nullable|string',
            'Division' => 'nullable|string',
            'Nom_enc' => 'nullable|string',
            'Prenom_enc' => 'nullable|string',
            'Tel_enc' => 'nullable|string|max:20',
        ]);

        $stage = Stage::create($validatedData);
        return redirect()->route('stages.index');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Cin_Stagiaire' => 'required|string|max:10|exists:stagiaires,Cin',
            'Date_D' => 'nullable|date',
            'Date_F' => 'nullable|date',
            'Sujet_Stage' => 'nullable|string',
            'Division' => 'nullable|string',
            'Nom_enc' => 'nullable|string',
            'Prenom_enc' => 'nullable|string',
            'Tel_enc' => 'nullable|string|max:20',
        ]);

        $stage = Stage::findOrFail($id);
        $stage->update($validatedData);
        return redirect()->route('stages.index');
    }

    public function destroy($id)
    {
        $stage = Stage::findOrFail($id);
        $stage->delete();
        return redirect()->route('stages.index');
    }
}
