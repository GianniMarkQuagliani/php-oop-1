<?php

require_once __DIR__ . '/model/movie.php';
require_once __DIR__ . '/db/db.php';

// Search 
if (isset($_GET['search'])) {
    // Questo è utile per rendere la ricerca case-insensitive, in modo che la ricerca funzioni sia con maiuscole che con minuscole.
    $searchQuery = strtolower($_GET['search']);
    // Questo è un array vuoto che verrà utilizzato per contenere i film che corrispondono ai criteri di ricerca.
    $filteredMovies = [];

    foreach ($movies as $movie) {
        // strago i dettagli del film (titolo, regista, generi) in formato di stringa e li converto in lettere minuscole.
        $movieDetails = strtolower($movie->getDetails());

        //  verifico se la stringa di ricerca ($searchQuery) è contenuta nei dettagli del film ($movieDetails). La funzione strpos restituirà la posizione in cui inizia la corrispondenza nella stringa o false se non trova una corrispondenza.
        if (strpos($movieDetails, $searchQuery) !== false) {
            // il film viene aggiunto all'array $filteredMovies
            $filteredMovies[] = $movie;
        }
    }

    // Sovrascrivo la lista dei film con i risultati filtrati
    $movies = $filteredMovies;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <!-- Title -->
    <title>Movie List</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Movie Database</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Genres</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($randomGenres as $genre): ?>
                                <a class="dropdown-item" href="genre.php?name=<?php echo $genre; ?>"><?php echo $genre; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ml-auto">
                <!-- Controllo per il cambio di tema -->
                <li class="nav-item">
                    <label class="nav-link" for="backgroundColor">Colore di Sfondo (RGBA):
                        <!-- Campo di input per il colore di sfondo -->
                        <input type="color" id="backgroundColor" value="#ffffff"> 
                    </label>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Container -->
    <div class="container">
    <h1 class="mt-5">Movie List</h1>
    <form class="form-inline mt-3">
    <div class="input-group">
        <input class="form-control" type="text" name="search" placeholder="Search">
        <div class="input-group-append">
            <button class="btn btn-primary ms-2" type="submit">
                <i class="fas fa-search"></i> Search
            </button>
        </div>
    </div>
</form>

        <div class="row mt-4">
            <?php foreach ($movies as $movie): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Movie Poster">
                        <div class="card-body">
                            <p class="card-text">
                                <?php echo $movie->getDetails(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
