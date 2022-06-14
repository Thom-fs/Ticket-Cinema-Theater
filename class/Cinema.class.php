<?php

/* Imports */
require_once __DIR__ . "/Ticket.class.php";

class Cinema extends Ticket
{

    public string $choice; // Le film choisi
    public string $movieRoom;
    public int $checkAge;
    public string $time;


    public function __construct(string $date, string $place, string $category, string $choice, string $movieRoom, int $checkAge, string $time)
    {
        // Constructeur du parent
        parent::__construct($date, $place, $category);

        $this->choice = $choice;
        $this->movieRoom = $movieRoom;
        $this->checkAge = $checkAge;
        $this->time = $time;
    }
}
