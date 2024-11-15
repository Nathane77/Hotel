<?php
class Hotel{
    private string $name;
    private string $address;
    private array $rooms;    

    public function __construct(string $name, string $address){
        $this->name = $name;
        $this->address = $address;
        $this->rooms = [];
    }

    public function getAddress()
    {
        return $this->address;
    }
    
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function addRoom(Room $rooms){
        $this->rooms[] = $rooms;
    }
    // j'ai accès à la propriété rooms sur laquele je peux boucler 
        // pour chaque objet rooms j'aurais accès à sa collection de de reservation
        // $nbReservation =
    public function getInfos(){
        echo $this->getName()."<br>".$this->getAddress()."<br>";
        
        foreach($this->rooms as $room){
            echo $room;
        }
    }

}