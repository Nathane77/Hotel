<?php
class Room{
    private string $roomNB;
    private Hotel $hotel;
    private float $price;
    private bool $wifi;
    private bool $available;
    private array $reservations;

    public function __construct(string $roomNB,  Hotel $hotel, float|int $price, bool $wifi){
        $this->roomNB = $roomNB;
        $this->hotel = $hotel;
        $this->price = $price;
        $this->hotel->addRoom($this);
        $this->reservations = [];
        $this->wifi = $wifi;
        $this->available = true;
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

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getAvailable()
    {
        return $this->available;
    }
 
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    public function getWifi()
    {
        return $this->wifi;
    }

    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }
    
        
    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
        $this->getAvailable = false;
    }

    public function countReservation(){
        return count($this->reservations);
         
    }

    public function __toString(){
        return "Chambre ".$this->getRoomNB()." ".$this->hotel->getName()."<br>";
    }
}