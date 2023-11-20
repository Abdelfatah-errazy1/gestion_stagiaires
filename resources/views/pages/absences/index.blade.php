@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Liste des Absences</h2>

        <table class="table datatable">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">CIN du Stagiaire</th>
                    <th scope="col">Date d'Absence</th>
                    <th scope="col">Motif</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($absences as $absence)
                    <tr>
                        <td>{{ $absence->id }}</td>
                        <td>{{ $absence->Cin }}</td>
                        <td>{{ $absence->date_debut}}</td>
                        <td>{{ $absence->date_fin}}</td>
                        <td>{{ $absence->justification }}</td>
                        <td>
                            <div class="d-flex gap-2">

                                <a href="{{ route('absences.show', $absence->id) }}" class="btn btn-info btn-sm">Voir</a>
                                <a href="{{ route('absences.edit', $absence->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <a href="{{ route('absences.destroy', $absence->id) }}" class="btn btn-danger btn-sm">Supprimer</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection