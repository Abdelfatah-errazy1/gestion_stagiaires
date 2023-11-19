
@extends('components.layout')

@section('content')
{{-- {{ $errors }} --}}

    <div class="container">
        <h2 class="mt-3 mb-4">Ajouter un Stagiaire</h2>

        <form action="{{ route('stagiaires.store') }}" method="POST">
    @csrf
    <div class="row">

        <div class="mb-3 col col-md-6">
            <label for="Cin" class="form-label">CIN</label>
        <input type="text" class="form-control" id="Cin" name="Cin" required>
    </div>
    <div class="mb-3 col col-md-6">
        <label for="Date_naissance" class="form-label">Date de Naissance</label>
        <input type="date" class="form-control" id="Date_naissance" name="Date_naissance">
    </div>
    <div class="mb-3 col col-lg-6 col-md-12 ">
        <label for="Mail" class="form-label">Email</label>
        <input type="email" class="form-control" id="Mail" name="Mail">
    </div>
    <div class="mb-3 col col-md-6">
        <label for="Nom" class="form-label">Nom</label>
        <input type="text" class="form-control" id="Nom" name="Nom" required>
    </div>
    <div class="mb-3 col col-md-6">
        <label for="Prenom" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="Prenom" name="Prenom" required>
    </div>
    <div class="mb-3 col col-md-12 col-lg-6">
        <label for="Qualite" class="form-label">Qualité</label>
        <input type="text" class="form-control" id="Qualite" name="Qualite">
    </div>
    <div class="mb-3 col col-md-6">
        <label for="Tel" class="form-label">Téléphone</label>
        <input type="tel" class="form-control" id="Tel" name="Tel">
    </div>
    <div class="mb-3 col col-md-6">
        <label for="Etablissement" class="form-label">Établissement</label>
        <input type="text" class="form-control" id="Etablissement" name="Etablissement">
    </div>
    <button type="submit" class="btn btn-primary">Créer</button>
</div>
</form>
    </div>
@endsection