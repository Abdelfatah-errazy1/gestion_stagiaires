<?php

namespace App\Http\Controllers;

use App\Models\Absence;
use App\Models\Notificaiton;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AbsenceController extends Controller
{
    public function index()
    {
        $absences = Absence::all();
        return view('pages.absences.index', compact('absences'));
    }

    public function create()
    {
        return view('pages.absences.create');
    }

 

    public function show(Absence $absence)
    {
        return view('absences.show', compact('absence'));
    }

    public function edit(Absence $absence)
    {
        return view('absences.edit', compact('absence'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Cin' => 'required|string|max:10|exists:stagiaires,Cin',
            
        ]);

        $absence = new Absence();
        $absence->Cin = $request->input('Cin');
        $absence->date_debut = $request->input('date_debut');
        $absence->date_fin = $request->input('date_fin');
        $absence->justification = $request->input('justification');
        $absence->save();
        $absences=Absence::query()->whereNull('justification')->get();
        if(count($absences)>=3){
            $noti=Notificaiton::create([
                'titre'=>'le stagiaire avec le Cin '.$absence->Cin.' a '.count($absences).' absences .'
            ]);
        }
        // dd($noti);
        return redirect()->route('absences.index');
        
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Cin_Stagiaire' => [
                'required',
                'string',
                'max:10',
                Rule::exists('stagiaires', 'Cin')->where(function ($query) use ($id) {
                    return $query->where('id', $id);
                }),
            ],
            // Add other validation rules for additional columns if needed
        ]);

        $absence = Absence::findOrFail($id);
        $absence->update($validatedData);
        return redirect()->route('absences.index');
    }

    public function destroy($id)
    {
        $absence = Absence::findOrFail($id);
        $absence->delete();
        return redirect()->route('absences.index');
    }
}
