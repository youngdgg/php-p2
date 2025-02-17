<?php
// Function: Showing houses
// Auteur: Rani

// Initialisation
// Add class definition object House
include_once "Huis.php";

//Main

// Creating three House objects
$House1 = new House(2, 5, 10, 6, 8);
$House2 = new House(1, 3, 8, 5, 7);
$House3 = new House(3, 6, 12, 7, 9);

// Print details of each House
$House1->displayDetails();
$House2->displayDetails();
$House3->displayDetails();

?>