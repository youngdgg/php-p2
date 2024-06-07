<?php
class Animal {
    public $naam;

    public function __construct($naam) {
        $this->naam = $naam;
        echo "Het dier is geboren\n";
    }

    public function Info() {
        echo "Naam: " . $this->naam . "\n";
    }

    public function Eat() {
        echo "Het beest eet\n";
    }

    public function Sleep() {
        echo "Het beest slaapt\n";
    }
}

// Maak een nieuw Animal object aan
$dier = new Animal("Leeuw");

// Roep alle methods aan
$dier->Info();
$dier->Eat();
$dier->Sleep();
?>


