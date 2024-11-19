<?php
class Room{
    private string $roomNB;
    private Hotel $hotel;
    private array $reservations;

    public function __construct(string $roomNB,  Hotel $hotel){
        $this->roomNB = $roomNB;
        $this->hotel = $hotel;
        $this->hotel->addRoom($this);
        $this->reservations = [];
    }

    public function getRoomNB()
    {
        return $this->roomNB;
    }

    public function setRoomNB($roomNB)
    {
        $this->roomNB = $roomNB;

        return $this;
    }
    
    public function getHotel()
    {
        return $this->hotel;
    }

    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
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
        
    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }

    public function countReservation(){
        return count($this->reservations);
         
    }

    public function __toString(){
        return "Chambre ".$this->getRoomNB()." ".$this->hotel->getName()."<br>";
    }
}