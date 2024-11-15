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

$reservation1 = new Reservation("10-11-2024","15-11-2024",$denilson1,$room1);

$hiltonStras->getInfos();
// var_dump($denilson1);
// var_dump($reservation1);
