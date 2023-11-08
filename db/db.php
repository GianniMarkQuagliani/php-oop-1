<?php
// creo due oggetti della classe Movie 
// Istanza di oggetti Movie
// Aggiorna il modo in cui crei gli oggetti Movie
require_once  __DIR__ . '/../model/movie.php';
require_once  __DIR__ . '/../model/TvSerie.php';
$movies = [];

try {
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
    // ERROR
    new Movie('Film10', 'Film10', ['Comedy', 'Drama', 'Thriller'], 1500, 120),
];

} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}

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

try {
$tvseries = [
    new TvSerie('Breaking Bad', 'Vince Gilligan', ['Crime', 'Drama', 'Thriller'], 2008, 2013, 62, 5),
    new TvSerie('Stranger Things', 'The Duffer Brothers', ['Drama', 'Fantasy', 'Horror'], 2016, 2022, 34, 4),
    new TvSerie('Game of Thrones', 'Vince Gilligan', ['Drama', 'Fantasy', 'Horror'], 2011, 2019, 73, 8),
    new TvSerie('Suits', 'Aaron Korsh', ['Comedy', 'Drama', 'Romance'], 2011, 2019, 51, 4),
    new TvSerie('The Big Bang Theory', 'Chuck Lorre', ['Comedy', 'Drama', 'Sci-Fi'], 2007, 2019, 66, 9),
    new TvSerie('The Wire', 'David Simon', ['Crime', 'Drama', 'Mystery'], 2008, 2019, 60, 4),
    new TvSerie('Friends', 'David Simon', ['Comedy', 'Drama', 'Romance'], 1994, 2004, 24, 10),
    new TvSerie('The 100', 'Aaron Korsh', ['Comedy', 'Drama', 'Romance'], 2013, 2019, 42, 4),
    new TvSerie('The Big Bang Theory', 'Chuck Lorre', ['Comedy', 'Drama', 'Sci-Fi'], 2007, 2019, 66, 9),
    new TvSerie('The Wire', 'David Simon', ['Crime', 'Drama', 'Mystery'], 2008, 2019, 60, 4),
];
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}
?>