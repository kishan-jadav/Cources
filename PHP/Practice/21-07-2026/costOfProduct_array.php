<?php
// Create a multidimensional array to store the prices of different products. Each product should have a name, price, and quantity. Write a function that calculates and displays the total cost of all the products. 

$products = [
    ["name" => "Laptop", "price" => 50000, "quantity" => 1],
    ["name" => "Mouse", "price" => 800, "quantity" => 5],
    ["name" => "Keyboard", "price" => 2200, "quantity" => 3],
    ["name" => "CPU", "price" => 15000, "quantity" => 1],
    ["name" => "Monitor", "price" => 20000, "quantity" => 4],
    ["name" => "Webcam", "price" => 13000, "quantity" => 1]
];

function  totalCost(array $products) 
{
    $total = 0;

    foreach ($products as $item) {
        $total += $item["price"] * $item["quantity"];
    }
    return $total;
}

$total = totalCost($products);
echo "Total : $total /- ";
