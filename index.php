<!DOCTYPE html>
<html lang="en">
<head>
    <link rel=stylesheet href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/19a031a4c5.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hotel POO</h1>
<?php
//force automatically the link of the classes' pages
spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$hiltonStras = new Hotel("Hilton **** Strasbourg", "10 route de la Gare 67000 STRASBOURG ");
$RegentParis = new Hotel("Rengent **** Paris", "61 rue dauphine 75006 PARIS");

$virgileG = new Client("Virgile","GIBELLO",$hiltonStras);
$mickaM = new Client("Micka","MURMANN",$hiltonStras);

$room1 = new Room("room 1",$hiltonStras, 120, false);
$room2 = new Room("room 2",$hiltonStras, 120, false);
$room3 = new Room("room 3",$hiltonStras, 120, false);
$room4 = new Room("room 4",$hiltonStras, 120, true);
$room5 = new Room("room 5",$hiltonStras, 120, true);
$room6 = new Room("room 6",$hiltonStras, 120, true);
$room7 = new Room("room 7",$hiltonStras, 120, true);
$room8 = new Room("room 8",$hiltonStras, 120, true);
$room9 = new Room("room 9",$hiltonStras, 120, true);
$room10 = new Room("room 10",$hiltonStras, 120, true);
$room11 = new Room("room 11",$hiltonStras, 120, true);
$room12 = new Room("room 12",$hiltonStras, 120, true);
$room13 = new Room("room 13",$hiltonStras, 120, true);
$room14 = new Room("room 14",$hiltonStras, 120, true);
$room15 = new Room("room 15",$hiltonStras, 120, true);
$room16 = new Room("room 16",$hiltonStras, 300, true);
$room17 = new Room("room 17",$hiltonStras, 300, true);
$room18 = new Room("room 18",$hiltonStras, 300, true);
$room19 = new Room("room 19",$hiltonStras, 300, true);
$room20 = new Room("room 20",$hiltonStras, 120, true);
$room21 = new Room("room 21",$hiltonStras, 120, true);
$room22 = new Room("room 22",$hiltonStras, 120, true);
$room23 = new Room("room 23",$hiltonStras, 120, true);

$reservation1 = new Reservation("01-01-2021","02-01-2021",$virgileG,$room17);
$reservation2 = new Reservation("11-03-2021","15-03-2021",$mickaM,$room3);
$reservation2 = new Reservation("01-04-2021","17-04-2021",$mickaM,$room4);


echo $hiltonStras->getInfos();
echo $hiltonStras->showReservation();
echo $RegentParis->getInfos();
echo $mickaM->showReservation();
echo $hiltonStras->getStatus();
?>
</body>
</html>
