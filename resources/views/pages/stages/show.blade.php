
@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Détails du Stage</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID du Stage: {{ $stage->id }}</h5>
                <p class="card-text">CIN du Stagiaire: {{ $stage->Cin_Stagiaire }}</p>
                <p class="card-text">Date de Début: {{ $stage->Date_D }}</p>
                <p class="card-text">Date de Fin: {{ $stage->Date_F }}</p>
                <p class="card-text">Sujet du Stage: {{ $stage->Sujet_Stage }}</p>
                <p class="card-text">Division: {{ $stage->Division }}</p>
                <p class="card-text">Nom de l'Encadrant: {{ $stage->Nom_enc }} {{ $stage->Prenom_enc }}</p>
                <p class="card-text">Téléphone de l'Encadrant: {{ $stage->Tel_enc }}</p>
                {{-- Ajoutez d'autres informations du stage si nécessaire --}}
            </div>
        </div>

        <a href="{{ route('stages.index') }}" class="btn btn-secondary mt-3">Retour à la liste des stages</a>
    </div>
@endsection
