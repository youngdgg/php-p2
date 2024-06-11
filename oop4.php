<?php
class Product {
    public $name;
    public $price;
    public $category;

    public function __construct($name, $price, $category) {
        $this->setName($name);
        $this->price = $price;
        $this->category = strtoupper($category);
    }

    public function setName($name) {
        $this->name = ucfirst($name);
    }
}

// Maak vier objecten van de class Product met prijs en categorie
$product1 = new Product("appel", 1.99, "fruit");
$product2 = new Product("banaan", 0.99, "fruit");
$product3 = new Product("kers", 2.99, "fruit");
$product4 = new Product("druif", 1.50, "fruit");

// Laat de properties en geformatteerde prijs op het scherm zien
echo $product1->name . " - $" . $product1->price . " - " . $product1->category . "<br>";
echo $product2->name . " - $" . $product2->price . " - " . $product2->category . "<br>";
echo $product3->name . " - $" . $product3->price . " - " . $product3->category . "<br>";
echo $product4->name . " - $" . $product4->price . " - " . $product4->category . "<br>";
?>
