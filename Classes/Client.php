<?php
class Client{
    private string $name;
    private string $lastName;
    private array $reservations;
   

    public function __construct(string $name, string $lastName){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->reservations = []; 
    }

    public function getReservations()
    {
        return $this->reservations;
    }

    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addReservation(Reservation $reservations){
        $this->Reservations[] = $reservations;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}