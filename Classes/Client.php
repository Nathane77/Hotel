<?php
class Client{
    private string $name;
    private string $lastName;
    private array $rooms;

    public function __construct(string $name, string $lastName){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->rooms = [];
    }
}