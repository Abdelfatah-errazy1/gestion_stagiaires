
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Les autres balises head ... -->

    <!-- Ajoutez ces lignes pour inclure Bootstrap (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Marque et bouton pour afficher/cacher le menu sur les petits écrans -->
            <a class="navbar-brand" href="{{ url('/') }}">Votre Application</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenu du menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('stagiaires.index') }}">Stagiaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('stages.index') }}">Stages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('absences.index') }}">Absences</a>
                    </li>
                    <!-- Ajoutez d'autres liens pour vos sections -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Le contenu de la page -->
    @yield('content')

    <!-- Ajoutez ces lignes pour inclure Bootstrap (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>