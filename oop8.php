<?php
class Product {
    public string $name;
    public float $price;
    public string $currency;

    public function __construct(string $name, float $price, string $currency = '€') {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function formatPrice() {
        return $this->currency . number_format($this->price, 2);
    }

    public function getProduct() {
        return "Het product " . $this->name . " kost " . $this->currency . " " . $this->price;
    }
}

// Maak objecten van de class Product met prijs en valuta
$product1 = new Product(name: "Techno beats", price: 2.00, currency: '€');
$product2 = new Product(name: "Rock anthem", price: 3.50, currency: '$');
$product3 = new Product(name: "Classical melody", price: 5.25, currency: '£');

// Echo het eerste product met de getProduct methode
echo $product1->getProduct() . "<br>";
echo $product2->getProduct() . "<br>";
echo $product3->getProduct() . "<br>";
?>
