<?php
class Product {
    public $name;
    public $price;
    public $category;
    public $currency;

    public function __construct($name, $price, $category, $currency = '€') {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->category = strtoupper($category);
        $this->currency = $currency;
    }

    public function formatPrice() {
        return $this->currency . number_format($this->price, 2);
    }
}

// Maak objecten van de class Product met prijs, categorie en valuta
$product1 = new Product("appel", 1.99, "fruit", "$");
$product2 = new Product("banaan", 0.99, "fruit");

// Laat de properties en geformatteerde prijs op het scherm zien
echo $product1->name . " - " . $product1->formatPrice() . " - " . $product1->category . "<br>";
echo $product2->name . " - " . $product2->formatPrice() . " - " . $product2->category . "<br>";
?>
