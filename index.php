<?php
declare(strict_types=1);
require_once 'ListenList.php';
require_once 'OOP11.php'; // Assuming the Music class is in OOP11.php

// Create a new ListenList object
$kees = new ListenList();

// Create Music objects
$music1 = new Music("song one", "rock", 120);
$music2 = new Music("ABC", "house", 2);
$music3 = new Music("song three", "jazz", 210);

// Add Music objects to the ListenList
$kees->addMusic($music1);
$kees->addMusic($music2);
$kees->addMusic($music3);

// Display the list of music
$kees->displayList();

// Use var_dump to display the music array
var_dump($kees->music);
?>