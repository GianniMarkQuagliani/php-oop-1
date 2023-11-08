<?php

class Production {
    // Campi per i dati della produzione
    protected $title;       // Titolo della produzione
    protected $director;    // Regista della produzione
    protected $genres;      // Array dei generi della produzione

    public function __construct($title, $director, $genres) {
        // Costruttore: inizializza i campi con i valori forniti
        $this->title = $title;
        $this->director = $director;
        $this->genres = $genres;
    }

    public function getDetails() {
        // Metodo per ottenere i dettagli della produzione
        $details = "<h5 class='card-title'>{$this->title}</h5>";  // Mostra il titolo
        $details .= "<p class='card-text'>Director: {$this->director}</p>";  // Mostra il regista
        $details .= "Genres: ";

        // Itera attraverso i generi e li aggiunge ai dettagli
        foreach ($this->genres as $genre) {
            $details .= "<span class='genre-icon'>&#9733;</span> {$genre}, ";
        }

        $details = rtrim($details, ', ');  // Rimuove l'ultima virgola

        return $details;  // Restituisce i dettagli formati come una stringa HTML
    }
}
