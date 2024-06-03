<?php

require_once __DIR__ . "/models/product.php";

$product1 = new Product('Crocchette di manzo (Conf. 10Kg)', 'Monge');
$product1->setPrice(49.90);
$product1->setDiscount(10);
$product1->setVat_percentage(22);
$product1->category = new Category('cane');

var_dump($product1);
