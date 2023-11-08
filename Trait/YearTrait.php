<?php

trait YearTrait {
    // Questo Trait non definisce alcuna proprietà
    // Ma fornisce i metodi per impostare e ottenere l'anno di pubblicazione
    public function setPublishedYear($year) {
        if (!is_numeric($year) || $year < 1800 || $year > date("Y")) {
            throw new Exception("Anno di pubblicazione non valido");
        }
        $this->published_year = $year;
    }

    public function getPublishedYear() {
        return $this->published_year;
    }
}
?>