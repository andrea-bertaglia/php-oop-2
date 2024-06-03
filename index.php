<?php

require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/food.php";

// prodotto n.1 generico
$product1 = new Product('Crocchette di manzo (Conf. 10Kg)', 'Monge');
$product1->setPrice(49.90);
$product1->setDiscount(10);
$product1->setVat_percentage(22);
$product1->category = new Category('cane');

var_dump($product1);

// prodotto n.2 di tipo food
$product2 = new Food('Crocchette di manzo (Conf. 10Kg)', 'Monge', 'secco', 'sacchetto', 'www');
$product2->setPrice(49.90);
$product2->setDiscount(10);
$product2->setVat_percentage(22);
$product2->category = new Category('cane');
$product2->setExpiration_date('2024-01-01');

var_dump($product2);

// prodotto n.3 di tipo food
$product3 = new Food('Straccetti di pollo', 'Almonature', 'umido', 'vaschetta', 'www');
$product3->setPrice(19.90);
$product3->setDiscount(10);
$product3->setVat_percentage(22);
$product3->category = new Category('gatto');
$product3->setExpiration_date('2024-01-01');
var_dump($product3);

// $catalog = [
//     [
//         'name' => $product2->getName(),
//         'brand' => $product2->getBrand(),
//         'price' => $product2->getPrice(),
//         'discount' => $product2->getDiscount()
//     ],
//     [
//         'name' => $product2->getName(),
//         'brand' => $product2->getBrand(),
//         'price' => $product2->getPrice(),
//         'discount' => $product2->getDiscount()
//     ],
// ];
// var_dump($catalog);
