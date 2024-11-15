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

$hiltonStras = new Hotel("Hilton","10 route de la Gare 67000 STRASBOURG","30");
$hiltonStras->calcRooms();
var_dump($hiltonStras);
$denilson = new Client("Denilson","DELMAS");
var_dump($denilson);