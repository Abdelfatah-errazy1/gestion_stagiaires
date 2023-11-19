
@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Ajouter une Absence</h2>

        <form method="POST" action="{{ route('absences.store') }}">
        @csrf
        <div class="row">

            <div class="form-group mb-3 col col-md-12">
                <label for="Cin">CIN Stagiaire:</label>
                <input type="text" class="form-control" id="Cin" name="Cin">
            </div>
            <div class="form-group mb-3 col col-md-6">
                <label for="date_debut">Start Date:</label>
                <input type="date" class="form-control" id="date_debut" name="date_debut">
            </div>
            <div class="form-group mb-3 col col-md-6">
                <label for="date_fin">End Date:</label>
                <input type="date" class="form-control" id="date_fin" name="date_fin">
            </div>
            <div class="form-group mb-3 col col-md-12">
                <label for="justification">Justification:</label>
                <textarea class="form-control" id="justification" name="justification"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
@endsection
