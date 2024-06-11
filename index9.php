<?php
require_once 'Music.php';

// Maak een nieuw muziek item aan
$music1 = new Music(name: 'Bach', genre: 'Klassiek', listen: 3);

// Toon de naam van het muziekstuk en de var_dump van het object
echo $music1->getName() . "<br>";
var_dump($music1);
?>
