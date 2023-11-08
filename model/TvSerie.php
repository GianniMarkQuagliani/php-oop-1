<?php
require_once __DIR__ . '/Production.php';

// Creo la classe TvSerie
class TvSerie extends Production {
    protected $aired_from_year;
    protected $aired_to_year;
    protected $number_of_episodes;
    protected $number_of_seasons;

    // Costruttore della classe
    public function __construct($title, $director, $genres, $aired_from_year, $aired_to_year, $number_of_episodes, $number_of_seasons) {
        // Chiamo il costruttore della classe genitore (Production)
        parent::__construct($title, $director, $genres);

        // Inizializzo i campi specifici delle serie TV
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }
}
?>
