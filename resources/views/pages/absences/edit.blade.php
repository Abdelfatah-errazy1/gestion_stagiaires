div
@extends('components.layout')

@section('content')
    <div class="container">
        <h2 class="mt-3 mb-4">Modifier l'Absence</h2>

        <form action="{{ route('absences.update', $absence->ID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">

                <div class="form-group">
                    <label for="Cin">CIN Stagiaire:</label>
                    <input type="text" class="form-control" id="Cin" name="Cin" value="{{ $absence->Cin }}">
                </div>
            <div class="form-group">
                <label for="date_debut">Date debut</label>
                <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ $absence->date_debut }}">
            </div>
            <div class="form-group">
                <label for="date_fin">Date fin</label>
                <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ $absence->date_fin }}">
            </div>
            <div class="form-group">
                <label for="justification">Justification:</label>
                <textarea class="form-control" id="justification" name="justification">{{ $absence->justification }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        </form>
        </form>

        <a href="{{ route('absences.index') }}" class="btn btn-secondary mt-3">Annuler</a>
    </div>
@endsection