<?php
// creo due oggetti della classe Movie 
// Istanza di oggetti Movie
// Aggiorna il modo in cui crei gli oggetti Movie
require_once  __DIR__ . '/../model/movie.php';
$movies = [
    new Movie('The Matrix', 'The Wachowskis', ['Action', 'Sci-Fi', 'Fantasy'], 1999, 136),
    new Movie('Film2', 'Film2', ['Comedy', 'Drama', 'Thriller'], 2000, 120),
    new Movie('Film3', 'Film3', ['Comedy', 'Drama', 'Thriller'], 2000, 120),
    new Movie('Film4', 'Film4', ['Comedy', 'Drama', 'Thriller'], 2000, 120),
    new Movie('Film5', 'Film5', ['Comedy', 'Drama', 'Thriller'], 2000, 120),
    new Movie('Film6', 'Film6', ['Comedy', 'Drama', 'Thriller'], 2000, 120),
    new Movie('Film7', 'Film7', ['Comedy', 'Drama', 'Thriller'], 2000, 120),
    new Movie('Film8', 'Film8', ['Comedy', 'Drama', 'Thriller'], 2000, 120),
    new Movie('Film9', 'Film9', ['Comedy', 'Drama', 'Thriller'], 2000, 120),
    new Movie('Film10', 'Film10', ['Comedy', 'Drama', 'Thriller'], 2000, 120),
];

// definisco un array di generi 
$randomGenres = [
    'Action', 
    'Adventure', 
    'Comedy', 
    'Drama', 
    'Fantasy', 
    'Horror', 
    'Mystery', 
    'Romance', 
    'Sci-Fi', 
    'Thriller'
];

?>