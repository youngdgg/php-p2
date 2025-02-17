<?php
// Room class to define the dimensions of a room and calculate its volume
class Room {
    public $length;
    public $width;
    public $height;

    // Constructor to initialize room dimensions
    public function __construct($length, $width, $height) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    // Method to calculate the volume of the room
    public function calculateVolume() {
        return $this->length * $this->width * $this->height;
    }
}

// House class to manage multiple rooms and calculate total house volume and price
class House {
    public $numFloors; // Number of floors in the house
    public $rooms = []; // Array to store Room objects
    private $pricePerM3 = 1500; // Fixed price per cubic meter

    // Constructor to initialize the number of floors
    public function __construct($numFloors) {
        $this->numFloors = $numFloors;
    }

    // Method to add a Room object to the house
    public function addRoom(Room $room) {
        $this->rooms[] = $room;
    }
// Method to calculate the total volume of the house by summing up the volume of all rooms
public function calculateTotalVolume() {
    $totalVolume = 0;
    foreach ($this->rooms as $room) {
        $totalVolume += $room->calculateVolume();
    }
    return $totalVolume;
}

// Method to calculate the total price of the house based on the total volume
public function calculatePrice() {
    return $this->calculateTotalVolume() * $this->pricePerM3;
}

// Method to display all house details, including each room and the total price
public function displayDetails() {
    echo "<strong>House Details:</strong><br>";
    echo "Number of floors: " . $this->numFloors . "<br>";
    echo "Total number of rooms: " . count($this->rooms) . "<br>";

    echo "<strong>Room Details:</strong><br>";
    foreach ($this->rooms as $index => $room) {
        echo "Room " . ($index + 1) . " - Dimensions: " 
            . $room->length . "m x " . $room->width . "m x " . $room->height . "m | Volume: " 
            . $room->calculateVolume() . " m³<br>";
    }

    echo "<strong>Total House Volume:</strong> " . $this->calculateTotalVolume() . " m³<br>";
    echo "<strong>Total Price:</strong> €" . number_format($this->calculatePrice(), 2, ',', '.') . "<br>";
    echo "<hr>";
}
}
?>
