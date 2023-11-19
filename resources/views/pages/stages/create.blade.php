
@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Ajouter un Stage</h2>
            {{-- {{ $errors }} --}}
        <form action="{{ route('stages.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="mb-3 col col-md-6">
                    <label for="Cin_Stagiaire" class="form-label">CIN du Stagiaire</label>
                <input type="text" class="form-control" id="Cin_Stagiaire" name="Cin_Stagiaire" required>
            </div>
            <div class="mb-3 col col-md-6">
                <label for="Division" class="form-label">Division</label>
                <input type="text" class="form-control" id="Division" name="Division" required>
            </div>
            <div class="mb-3 col col-md-6">
                <label for="Date_D" class="form-label">Date de Début</label>
                <input type="date" class="form-control" id="Date_D" name="Date_D" required>
            </div>

            <div class="mb-3 col col-md-6">
                <label for="Date_F" class="form-label">Date de Fin</label>
                <input type="date" class="form-control" id="Date_F" name="Date_F" required>
            </div>
           

            <div class="mb-3 col col-md-12">
                <label for="Sujet_Stage" class="form-label">Sujet du Stage</label>
                <textarea class="form-control" id="Sujet_Stage" name="Sujet_Stage" rows="3" required></textarea>
            </div>

           

            <div class="mb-3 col col-md-4">
                <label for="Nom_enc" class="form-label">Nom de l'Encadrant</label>
                <input type="text" class="form-control" id="Nom_enc" name="Nom_enc" required>
            </div>

            <div class="mb-3 col col-md-4">
                <label for="Prenom_enc" class="form-label">Prenom de l'Encadrant</label>
                <input type="text" class="form-control" id="Prenom_enc" name="Prenom_enc" required>
            </div>

            <div class="mb-3 col col-md-4">
                <label for="Tel_enc" class="form-label">Téléphone de l'Encadrant</label>
                <input type="tel" class="form-control" id="Tel_enc" name="Tel_enc" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
        </form>
    </div>
@endsection
