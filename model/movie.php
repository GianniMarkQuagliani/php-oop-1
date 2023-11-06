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
    

}

?>