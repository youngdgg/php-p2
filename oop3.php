<?php
class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function formatPrice() {
        return number_format($this->price, 2);
    }
}

// Maak vier objecten van de class Product met prijs
$product1 = new Product("Product 1", 10.99);
$product2 = new Product("Product 2", 15.50);
$product3 = new Product("Product 3", 7.25);
$product4 = new Product("Product 4", 20.00);

// Laat de properties en geformatteerde prijs op het scherm zien
echo $product1->name . " - $" . $product1->formatPrice() . "<br>";
echo $product2->name . " - $" . $product2->formatPrice() . "<br>";
echo $product3->name . " - $" . $product3->formatPrice() . "<br>";
echo $product4->name . " - $" . $product4->formatPrice() . "<br>";

// Verander een property
$product3->name = "Veranderd Product 3";

// Laat de veranderde property en geformatteerde prijs op het scherm zien
echo $product3->name . " - $" . $product3->formatPrice() . "<br>";
?>
