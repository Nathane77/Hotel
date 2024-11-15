<?php
class Room{
    private string $roomNB;
    private Hotel $hotel;

    public function __construct(string $roomNB,  Hotel $hotel){
        $this->roomNB = $roomNB;
        $this->hotel = $hotel;
        $this->hotel->addRoom($this);
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

    public function getRoomNB()
    {
        return $this->roomNB;
    }

    public function setRoomNB($roomNB)
    {
        $this->roomNB = $roomNB;

        return $this;
    }
    
    public function __toString(){
        return "Chambre ".$this->getRoomNB()." ".$this->hotel->getName()."<br>";
    }
}