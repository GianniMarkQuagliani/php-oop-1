<?php
require_once __DIR__ . '/Production.php';

class TvSerie extends Production {
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct($title, $director, $genres, $aired_from_year, $aired_to_year, $number_of_episodes, $number_of_seasons) {
        parent::__construct($title, $director, $genres);
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }
}
?>
