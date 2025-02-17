<?php
// Function: Showing houses
// Auteur: Rani

// Initialisation
// Add class definition object House
include_once "Huis.php";

// Main
// Creating three houses with different properties
$house1 = new House(2); // House with 2 floors
$house1->addRoom(new Room(5, 4, 3)); // Adding rooms
$house1->addRoom(new Room(6, 5, 3));
$house1->addRoom(new Room(4, 4, 3));

$house2 = new House(1); // House with 1 floor
$house2->addRoom(new Room(7, 6, 3));
$house2->addRoom(new Room(5, 5, 3));

$house3 = new House(3); // House with 3 floors
$house3->addRoom(new Room(8, 6, 3));
$house3->addRoom(new Room(6, 5, 3));
$house3->addRoom(new Room(7, 5, 3));
$house3->addRoom(new Room(4, 4, 3));

// Display details of all houses
$house1->displayDetails();
$house2->displayDetails();
$house3->displayDetails();

?>

