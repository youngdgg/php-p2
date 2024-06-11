<?php
declare(strict_types=1);

class Music {
    public string $name;
    public string $genre;
    public int $listen;

    // Constructor to initialize the properties with strict types
    public function __construct(string $name, string $genre, int $listen) {
        $this->name = ucfirst($name);
        $this->genre = ucfirst($genre);
        $this->listen = $listen;
    }

    // Method to format and display the properties
    public function display() {
        return "Name: $this->name, Genre: $this->genre, Listens: $this->listen";
    }
}

// Create objects of the Music class
$music1 = new Music("song one", "rock", 120);
$music2 = new Music("song two", "pop", 340);
$music3 = new Music("song three", "jazz", 210);

// Display the properties of the objects
echo $music1->display() . "<br>";
echo $music2->display() . "<br>";
echo $music3->display() . "<br>";
?>