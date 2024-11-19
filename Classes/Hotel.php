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

    public function countRooms(){
        $count= 0;
        foreach($this->rooms as $room){
           foreach($room->getReservations() as $reservation){
                $count++;
           }
        }
        if($count <= 0){
            return "Aucune reservation !";
        }
        else{
        $nbEmptyRoom = (count($this->rooms) - $count);
        return count($this->rooms)."<br> Nombre de chambres reservées: ".$count."<br> Nombre de chambres disponible ".$nbEmptyRoom;
        }
    }

    public function showReservation(){
        foreach($this->rooms as $room){
            foreach($room->getReservations() as $reservation){
                return $reservation;
        }
    }
}  
    // j'ai accès à la propriété rooms sur laquele je peux boucler 
        // pour chaque objet rooms j'aurais accès à sa collection de de reservation
    public function getInfos(){
        echo $this->getName()."<br>".$this->getAddress()."<br> Nombre de chambres: ".$this->countRooms()."<br>".$this->showReservation();
    }



}