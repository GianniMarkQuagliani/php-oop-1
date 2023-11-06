<?php
// creo la classe Movie
class Movie{
    // definisco i membri della classe
    public $title;
    public $director;
    public $genres;
    
    // costruttore della classe
    public function __construct($title, $director, $genres){
        $this->title = $title;
        $this->director = $director;
        $this->genres = $genres;
    }
    
    // Metodo per ottenere i dettagli del film
    public function getDetails() {
        $details = "<h5 class='card-title'>{$this->title}</h5>";
        $details .= "<p class='card-text'>Director: {$this->director}</p>";
        $details .= "Genres: ";
        
        foreach ($this->genres as $genre) {
            $details .= "<span class='genre-icon'>&#9733;</span> {$genre}, ";
        }
        
        // Rimuovo l'ultima virgola e spazio extra
        $details = rtrim($details, ', ');
    
        return $details;
    }
    
    
    
    
}

?>