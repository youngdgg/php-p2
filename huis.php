<?php
class House {
    public $NumFloors;
    public $NumRooms;
    public $Width;
    public $Height;
    public $Depth;
    private $PricePerM3 = 1500; // Fixed price per cubic meter

    public function __construct($NumFloors, $NumRooms, $Width, $Height, $Depth) {
        $this->NumFloors = $NumFloors;
        $this->NumRooms = $NumRooms;
        $this->Width = $Width;
        $this->Height = $Height;
        $this->Depth = $Depth;
    }

    public function calculateVolume() {
        return $this->Width * $this->Height * $this->Depth;
    }

    public function calculatePrice() {
        return $this->calculateVolume() * $this->PricePerM3;
    }

    public function displayDetails() {
        echo "House Details:<br>";
        echo "Number of floors: " . $this->NumFloors . "<br>";
        echo "Number of rooms: " . $this->NumRooms . "<br>";
        echo "Dimensions (WxHxD): " . $this->Width . "m x " . $this->Height . "m x " . $this->Depth . "m<br>";
        echo "Volume: " . $this->calculateVolume() . " m³<br>";
        echo "Price: €" . number_format($this->calculatePrice(), 2, ',', '.') . "<br>";
        echo "<hr>";
    }
}
?>
