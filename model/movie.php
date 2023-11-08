<?php
require_once __DIR__ . '/Production.php';
require_once __DIR__ . '/../Trait/YearTrait.php';
// creo la classe Movie
class Movie extends Production {
    use YearTrait;
    protected $running_time;
    protected $published_year;
    // costruttore della classe
    public function __construct($title, $director, $genres, $published_year, $running_time) {
        parent::__construct($title, $director, $genres);
        $this->setPublishedYear($published_year);
        $this->running_time = $running_time;
    }

    public function getDetails() {
        $details = parent::getDetails();
        $details .= "<p>Year: {$this->getPublishedYear()}</p>";
        $details .= "<p>Running Time: {$this->running_time} minutes</p>";
        return $details;
    }
}


?>