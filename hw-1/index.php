<?php

include "Product.php";

$count = rand(2, 6);
$products = [];
$product = new Product();
$summary = 0;
$names = ['phone', 'computer', 'sofa', 'table', 'chair', 'camera'];
$prices = rand(200, 1000);


for ($i = 0; $i < $count; $i++) {
    $products[$i] = $product->buyProduct($names[rand(0, count($names) - 1)], $prices[rand(0, count($prices) - 1)]);
    $summary += $products[$i]->price;
}

echo 'Сумма вашей покупки ' . $summary;

