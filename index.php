<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hotel POO</h1>
</body>
<style>
    body{
        background: grey;
        color: white;
    }
</style>
</html>
<?php
//force automatically the link of the classes' pages
spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$hiltonStras = new Hotel("Hilton Strasbourg *******","10 route de la Gare 67000 STRASBOURG ");
$hiltonMulhouse = new Hotel("Hilton Mulhouse","10 route de la Gare 68200 Mulhouse");
$hiltonColmar = new Hotel("Hilton Colmar","10 route de la Gare 68000 Colmar");

$denilson1 = new Client("Denilson1","DELMAS1",$hiltonStras);

$room1 = new Room("room 1",$hiltonStras);
$room2 = new Room("room 2",$hiltonStras);
$room3 = new Room("room 3",$hiltonStras);
$room4 = new Room("room 4",$hiltonStras);
$room5 = new Room("room 5",$hiltonStras);
$room6 = new Room("room 6",$hiltonStras);
$room7 = new Room("room 7",$hiltonStras);
$room8 = new Room("room 8",$hiltonStras);
$room9 = new Room("room 9",$hiltonStras);
$room10 = new Room("room 10",$hiltonStras);
$room11 = new Room("room 11",$hiltonStras);
$room12 = new Room("room 12",$hiltonStras);
$room13 = new Room("room 13",$hiltonStras);
$room14 = new Room("room 14",$hiltonStras);
$room15 = new Room("room 15",$hiltonStras);
$room16 = new Room("room 16",$hiltonStras);
$room17 = new Room("room 17",$hiltonStras);
$room18 = new Room("room 18",$hiltonStras);
$room19 = new Room("room 19",$hiltonStras);
$room20 = new Room("room 20",$hiltonStras);
$room21 = new Room("room 21",$hiltonStras);
$room22 = new Room("room 22",$hiltonStras);
$room23 = new Room("room 23",$hiltonStras);

$reservation1 = new Reservation("10-11-2024","15-11-2024",$denilson1,$room1);
$reservation2 = new Reservation("10-11-2025","15-11-2025",$denilson1,$room2);


// var_dump($denilson1);
// var_dump($reservation1);

$hiltonStras->getInfos();
$hiltonStras->showReservation();

// var_dump($room1);

// echo $room1->countReservation();
