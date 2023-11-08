<?php
require_once __DIR__ . '/Production.php';
// creo la classe Movie
class Movie extends Production {
    protected $published_year;
    protected $running_time;
    
    // costruttore della classe
    public function __construct($title, $director, $genres, $published_year, $running_time) {
        parent::__construct($title, $director, $genres);
        $this->published_year = $published_year;
        $this->running_time = $running_time;
    }

    public function getDetails() {
        $details = parent::getDetails();
        $details .= "<p>Year: {$this->published_year}</p>";
        $details .= "<p>Running Time: {$this->running_time} minutes</p>";
        return $details;
    }
    
}

?>