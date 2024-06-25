<?php

class Animal {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
        echo "Het dier is geboren.<br>";
    }

    public function Info(): void {
        echo "De naam van het dier is: " . $this->name . "<br>";
    }

    public function Eat(): void {
        echo "Het beest eet.<br>";
    }

    public function Sleep(): void {
        echo "Het beest slaapt.<br>";
    }
}

class Bird extends Animal {

    public function Fly(): void {
        echo "De vogel vliegt.<br><br>";
    }
}


// Maak een nieuw Bird object aan genaamd "Eend"
$eend = new Bird("Eend");

// Roep de methoden aan
$eend->Info();
$eend->Eat();
$eend->Sleep();
$eend->Fly();

class Parrot extends Bird{
    public function Eat(): void{
        echo "De parkiet eet alleen planten.<br><br>";
    }
}

//maak een nieuw bird object genaamd 'parkiet'
$parkiet = new Parrot("parkiet");

//roep de methoden aan
$parkiet->Info();
$parkiet->Eat();
$parkiet->Sleep();
$parkiet->Fly();


class Vis extends Animal {
    public function swim(): void{
        echo "De vis zwemt.<br>";
    }
}
//maak een nieuw vis object aan genaamd "goudvis"
$vis = new Vis("Goudvis");

//roep de methoden aan
$vis->Info();
$vis->eat();
$vis->sleep();
$vis->swim();

?>


