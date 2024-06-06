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

// Controleer of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['naam']) && !empty($_POST['naam'])) {
        // Maak een nieuw Animal object aan met de opgegeven naam
        $dier = new Animal($_POST['naam']);
    } else {
        // Maak een nieuw Animal object aan met een standaard naam
        $dier = new Animal("Olifant");
    }

    // Roep alle methods aan
    $dier->Info();
    $dier->Eat();
    $dier->Sleep();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Maak een nieuw dier</title>
</head>
<body>
    <h1>Maak een nieuw dier</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="naam">Naam van het dier:</label>
        <input type="text" id="naam" name="naam">
        <input type="submit" value="Maak dier">
    </form>
</body>
</html>
