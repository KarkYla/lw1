<?php

function filterByPriceRange(array $products, float $min, float $max): array
{
    $filtered = [];
    foreach ($products as $product) {
        if ($product['price'] >= $min && $product['price'] <= $max) {
            $filtered[] = $product;
        }
    }
    return $filtered;
}
$products = [
    ['name' => 'Apple', 'price' => 50],
    ['name' => 'Banana', 'price' => 30],
    ['name' => 'Mango', 'price' => 100],
    ['name' => 'Pear', 'price' => 70],
];

$result = filterByPriceRange($products, 40, 80);

print_r($result);