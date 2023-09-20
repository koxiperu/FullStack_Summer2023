<?php

/* EXERCISE

- Part 1
-- Create an associative array that contains the number in stock
 for each item: 20 T-Shirts, 10 Caps and 5 Shoes.
-- Display the stock of caps.

- Part 2
Based on the previous variables you created.
The clothing store has just received a new stock of shoes and caps.
-- Add 5 caps.
-- Add 20 shoes.
-- Display the shoe stock.
*/

// Part 1
$shopStock = [
    'shoes' => 5,
    'tShirts' => 20,
    'caps' => 10
];

echo 'Caps in stock : ' . $shopStock['caps'] . '<br>';

// Part 2
$shopStock['shoes'] += 20;
$shopStock['caps'] += 5;

echo 'Shoes in stock : ' . $shopStock['shoes'] . '<br>';