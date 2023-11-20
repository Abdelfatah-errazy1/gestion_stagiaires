
@extends('components.layout')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID de l'Absence: {{ $absence->id }}</h5>
                <p class="card-text">CIN du Stagiaire: {{ $absence->Cin }}</p>
                <p class="card-text">Date debut: {{ $absence->date_debut }}</p>
                <p class="card-text">Date fin: {{ $absence->date_fin }}</p>
                <p class="card-text">justificaiton : {{ $absence->justification }}</p>
                {{-- Ajoutez d'autres informations de l'absence si nécessaire --}}
            </div>
        </div>

        <a href="{{ route('absences.index') }}" class="btn btn-secondary mt-3">Retour à la liste des absences</a>
    </div>
@endsection