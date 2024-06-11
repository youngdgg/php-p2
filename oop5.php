<?php
class Product {
    public $name;
    public $price;
    public $category;

    public function __construct($name, $price, $category) {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->category = strtoupper($category);
    }
}

// Maak objecten van de class Product met prijs en categorie
$product1 = new Product("appel", 1.99, "fruit");
$product2 = new Product("banaan", 0.99, "fruit");

// Laat de properties en geformatteerde prijs op het scherm zien
echo $product1->name . " - $" . $product1->price . " - " . $product1->category . "<br>";
echo $product2->name . " - $" . $product2->price . " - " . $product2->category . "<br>";
?>
