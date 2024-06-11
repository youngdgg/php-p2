<?php
class Product {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

// Maak vier objecten van de class Product
$product1 = new Product("Product 1");
$product2 = new Product("Product 2");
$product3 = new Product("Product 3");
$product4 = new Product("Product 4");

// Laat de properties op het scherm zien
echo $product1->name . "<br>";
echo $product2->name . "<br>";
echo $product3->name . "<br>";
echo $product4->name . "<br>";

// Verander een property
$product3->name = "Veranderd Product 3";

// Laat de veranderde property op het scherm zien
echo $product3->name . "<br>";
?>
