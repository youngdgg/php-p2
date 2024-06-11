<?php
class Product {
    public function __construct(
        public string $name,
        public float $price,
        public string $currency = '€'
    ) {
        $this->name = ucfirst($name);
    }

    public function formatPrice() {
        return $this->currency . number_format($this->price, 2);
    }
}

// Maak objecten van de class Product met prijs en valuta
$product1 = new Product(name: "rock song", price: 1.99, currency: "$");
$product2 = new Product(name: "jazz tune", price: 0.99);
$product3 = new Product(name: "pop hit", price: 2.49, currency: "£");

// Laat de properties en geformatteerde prijs op het scherm zien
echo $product1->name . " - " . $product1->formatPrice() . "<br>";
echo $product2->name . " - " . $product2->formatPrice() . "<br>";
echo $product3->name . " - " . $product3->formatPrice() . "<br>";
?>
