
@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Ajouter une Absence</h2>

        <form action="{{ route('absences.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="Cin_Stagiaire" class="form-label">CIN du Stagiaire</label>
                <input type="text" class="form-control" id="Cin_Stagiaire" name="Cin_Stagiaire" required>
            </div>

            <div class="mb-3">
                <label for="Date_Absence" class="form-label">Date d'Absence</label>
                <input type="date" class="form-control" id="Date_Absence" name="Date_Absence" required>
            </div>

            <div class="mb-3">
                <label for="Motif" class="form-label">Motif</label>
                <textarea class="form-control" id="Motif" name="Motif" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
