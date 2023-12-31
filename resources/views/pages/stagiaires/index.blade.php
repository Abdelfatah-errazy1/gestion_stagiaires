@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Liste des Stagiaires</h2>
        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">CIN</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Date de Naissance</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stagiaires as $stagiaire)
                    <tr>
                        <td>{{ $stagiaire->Cin }}</td>
                        <td>{{ $stagiaire->Nom }}</td>
                        <td>{{ $stagiaire->Prenom }}</td>
                        <td>{{ $stagiaire->Date_naissance }}</td>
                        <td>
                            <div class="d-flex gap-2">

                                <a href="{{ route('stagiaires.show', $stagiaire->Cin) }}" class="btn btn-info btn-sm">Voir</a>
                                <a href="{{ route('stagiaires.edit', $stagiaire->Cin) }}" class="btn btn-warning btn-sm">Modifier</a>
                                
                                <a href="{{ route('stagiaires.destroy', $stagiaire->Cin) }}"   onclick="confirmeDelete(event)" class="btn btn-danger btn-sm">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
@endsection