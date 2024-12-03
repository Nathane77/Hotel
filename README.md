# **README First APP**

## **First APP**

## **Introduction**

This exercise is here to learn `OOP` or `Object Oriented Programming` in PHP

## **Main function of the project**

This function shows each reservation of an `hotel` using his relationship with the `room`.
```php
    public function showReservation(){
        $count= 0;
        $result= ""; 
        foreach($this->rooms as $room){
            foreach($room->getReservations() as $reservation){
                $count++;
                $result .= $reservation."<br>";
            }
        }
        return "reservations de l'hotel ".$this->getName()."<p>".$count." Reservation !</p>".$result."<br>"; 
    }  
```
The hotel has **NO** link to the reservation, only the room makes the link between the two.

## **if you have question about the project you can contact me on my [linkedIn](https://www.linkedin.com/in/nassim-hammoudi-8a5235334/)**