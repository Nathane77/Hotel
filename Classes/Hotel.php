<?php
class Hotel{
    private string $name;
    private string $adress;
    private int $totalRoom;
    private int $reservedRoom;
    private int $emptyRoom;

    public function __construct(string $name, string $adress, int $totalRoom){
        $this->name = $name;
        $this->adress = $adress;
        $this->totalRoom = $totalRoom;
        $this->reservedRoom = 0;
        $this->getEmptyRoom = $totalRoom;
    }

    public function getAdress()
    {
        return $this->adress;
    }
    
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    public function getEmptyRoom()
    {
        return $this->emptyRoom;
    }

    public function setEmptyRoom($emptyRoom)
    {
        $this->emptyRoom = $emptyRoom;

        return $this;
    }

    public function getReservedRoom()
    {
        return $this->reservedRoom;
    }
 
    public function setReservedRoom($reservedRoom)
    {
        $this->reservedRoom = $reservedRoom;

        return $this;
    }

    public function getTotalRoom()
    {
        return $this->totalRoom;
    }
 
    public function setTotalRoom($totalRoom)
    {
        $this->totalRoom = $totalRoom;

        return $this;
    }

    public function calcRooms(){
        $tRoom = $this->getTotalRoom();
        $rRoom = $this->getReservedRoom();
        $eRoom = ($tRoom -= $rRoom);
        $this->setEmptyRoom($eRoom);
    }
}