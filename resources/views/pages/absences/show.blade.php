
@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Détails de l'Absence</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID de l'Absence: {{ $absence->ID }}</h5>
                <p class="card-text">CIN du Stagiaire: {{ $absence->Cin_Stagiaire }}</p>
                <p class="card-text">Date d'Absence: {{ $absence->Date_Absence }}</p>
                <p class="card-text">Motif: {{ $absence->Motif }}</p>
                {{-- Ajoutez d'autres informations de l'absence si nécessaire --}}
            </div>
        </div>

        <a href="{{ route('absences.index') }}" class="btn btn-secondary mt-3">Retour à la liste des absences</a>
    </div>
@endsection