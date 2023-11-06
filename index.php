<?php

require_once 'model/movie.php';
require_once 'db/db.php';

// creo due oggetti della classe Movie 
// Istanza di oggetti Movie
$movie = new Movie('The Matrix', 'The Wachowskis', ['Action', 'Sci-Fi', 'Fantasy']);
$movie2 = new Movie('Film2', 'Film2', ['Comedy', 'Drama', 'Thriller']);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css' integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==' crossorigin='anonymous'/>
    
    <!-- Title -->
    <title>Movie</title>
</head>
<body>

    <!-- Container -->
    <div  class="container">
        <h1>Movie 1</h1>
        <p>Title: <?php echo $movie->title; ?></p>
        <p>Director: <?php echo $movie->director; ?></p>
        <p>Genres: <?php echo implode(', ', $movie->genres); ?></p>

        <h1>Movie 2</h1>
        <p>Title: <?php echo $movie2->title; ?></p>
        <p>Director: <?php echo $movie2->director; ?></p>
        <p>Genres: <?php echo implode(', ', $movie2->genres); ?></p>
    </div>

</body>
</html>