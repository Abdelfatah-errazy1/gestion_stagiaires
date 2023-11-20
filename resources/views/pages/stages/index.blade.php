
@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Liste des Stages</h2>

        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CIN du Stagiaire</th>
                    <th scope="col">Date de Début</th>
                    <th scope="col">Date de Fin</th>
                    <th scope="col">Sujet du Stage</th>
                    <th scope="col">Division</th>
                    <th scope="col">Nom de l'Encadrant</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stages as $stage)
                    <tr>
                        <td>{{ $stage->id }}</td>
                        <td>{{ $stage->Cin_Stagiaire }}</td>
                        <td>{{ $stage->Date_D }}</td>
                        <td>{{ $stage->Date_F }}</td>
                        <td>{{ $stage->Sujet_Stage }}</td>
                        <td>{{ $stage->Division }}</td>
                        <td>{{ $stage->Nom_enc }} {{ $stage->Prenom_enc }}</td>
                        <td >
                            <div class="d-flex gap-2">

                                <a href="{{ route('stages.show', $stage->id) }}" class="btn btn-info btn-sm">Voir</a>
                                <a href="{{ route('stages.edit', $stage->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <a href="{{ route('stages.destroy', $stage->id) }}" class="btn btn-danger btn-sm">Supprimer</a>
                            </div>
                            {{-- Ajoutez un formulaire pour la suppression si nécessaire --}}
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection