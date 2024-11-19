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

    public function setReservation($reservation)
    {
        $this->reservation = $reservation;

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

    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function showReservation(){
        $count= 0;
        $result= ""; 
        foreach($this->reservations as $reservation){
                $count++;
                $result .= $reservation."<br>";
            }
            return "Reservations de ".$this->getName()."<p>".$count." Reservation !</p>".$result."Total: ".$this->calcStay()." €<br><br>";   
        }
    
    public function calcStay(){
        $totalPrice = 0.00;
        foreach($this->reservations as $reservation){
            $totalPrice += ($reservation->calcPrice());
        }
        return $totalPrice;
    }
    
    public function __toString(){
        return $this->name." ".$this->lastName." ";
    }
}