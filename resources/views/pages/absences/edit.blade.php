
@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Modifier l'Absence</h2>

        <form action="{{ route('absences.update', $absence->ID) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="Cin_Stagiaire" class="form-label">CIN du Stagiaire</label>
                <input type="text" class="form-control" id="Cin_Stagiaire" name="Cin_Stagiaire" value="{{ $absence->Cin_Stagiaire }}" readonly>
            </div>

            <div class="mb-3">
                <label for="Date_Absence" class="form-label">Date d'Absence</label>
                <input type="date" class="form-control" id="Date_Absence" name="Date_Absence" value="{{ $absence->Date_Absence }}" required>
            </div>

            <div class="mb-3">
                <label for="Motif" class="form-label">Motif</label>
                <textarea class="form-control" id="Motif" name="Motif" rows="3" required>{{ $absence->Motif }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>

        <a href="{{ route('absences.index') }}" class="btn btn-secondary mt-3">Annuler</a>
    </div>
@endsection