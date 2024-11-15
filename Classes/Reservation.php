<?php
class Reservation{
    private Room $room;
    private Client $client;
    private DateTime $startDate;
    private DateTime $endDate;

    public function __construct(string $startDate, string $endDate,Client $client, Room $room){
        $this->room = $room;
        $this->client = $client;
        $this->startDate = new DateTime($startDate);
        $this->endDate = new DateTime($endDate);
        $this->client->addReservation($this);
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }
 
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function getRoom()
    {
        return $this->room;
    }

    public function setRoom($room)
    {
        $this->room = $room;

        return $this;
    }
}