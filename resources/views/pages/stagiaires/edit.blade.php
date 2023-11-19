div
@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Modifier le Stagiaire</h2>

        <form action="{{ route('stagiaires.update', $stagiaire->Cin) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="mb-3 col col-md-6">
                    <label for="Cin" class="form-label">CIN</label>
                    <input type="text" class="form-control" id="Cin" name="Cin" value="{{ $stagiaire->Cin }}" required>
                </div>
                <div class="mb-3 col col-md-6">
                <label for="Date_naissance" class="form-label">Date de Naissance</label>
                <input type="date" class="form-control" id="Date_naissance" name="Date_naissance" value="{{ $stagiaire->Date_naissance }}">
            </div>
            <div class="mb-3 col col-md-6">
                <label for="Mail" class="form-label">Email</label>
                <input type="email" class="form-control" id="Mail" name="Mail" value="{{ $stagiaire->Mail }}">
            </div>
            <div class="mb-3 col col-md-6">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="Nom" name="Nom" value="{{ $stagiaire->Nom }}" required>
            </div>
            <div class="mb-3 col col-md-6">
                <label for="Prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="Prenom" name="Prenom" value="{{ $stagiaire->Prenom }}" required>
            </div>
            <div class="mb-3 col col-md-6">
                <label for="Qualite" class="form-label">Qualité</label>
                <input type="text" class="form-control" id="Qualite" name="Qualite" value="{{ $stagiaire->Qualite }}">
            </div>
            <div class="mb-3 col col-md-6">
                <label for="Tel" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="Tel" name="Tel" value="{{ $stagiaire->Tel }}">
            </div>
            <div class="mb-3 col col-md-6">
                <label for="Etablissement" class="form-label">Établissement</label>
                <input type="text" class="form-control" id="Etablissement" name="Etablissement" value="{{ $stagiaire->Etablissement }}">
            </div>
            <div class="col row">
                <div class="col-6 row">
                    <button type="submit" class="btn btn-primary  ">Mettre à Jour</button>

                </div>
                <div class="col-6 row">

                    <a href="{{ route('stagiaires.index') }}" class="btn btn-secondary ">Annuler</a>
                </div>

            </div>
        </div>
        </form>
        
    </div>
@endsection