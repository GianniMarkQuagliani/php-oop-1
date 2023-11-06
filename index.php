<?php

require_once 'model/movie.php';
require_once 'db/db.php';

// creo due oggetti della classe Movie 
// Istanza di oggetti Movie

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
        <h1>Movie List</h1>
        <ul>
            <?php foreach ($movies as $movie): ?>
                <li>
                    <h2><?php echo $movie->title; ?></h2>
                    <p>Director: <?php echo $movie->director; ?></p>
                    <p>Genres: <?php echo implode(', ', $movie->genres); ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>