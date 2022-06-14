<?php

/* Imports */
require_once __DIR__ . "/Ticket.class.php";

class Theater extends Ticket
{

    public string $choiceTheater; //La pièce choisie
    public string $startTime; // l'heure de début
    public string $intermission; // L'heure de l'entracte


    public function __construct(string $date, string $place, string $category, string $choice, string $choiceTheater, int $startTime, string $intermission)
    {
        // Constructeur du parent
        parent::__construct($date, $place, $category);

        $this->choiceTheater = $choiceTheater;
        $this->startTime = $startTime;
        $this->intermission = $intermission;
    }
}
