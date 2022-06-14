<?php


abstract class Ticket
{


    public string $date;
    public string $place;
    public string $category;



    public function __construct(string $date, string $place, string $category)
    {
        $this->date = $date;
        $this->place = $place;
        $this->category = $category;
    }
}
