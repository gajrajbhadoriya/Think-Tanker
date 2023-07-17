<?php

$string = "meet patel";

$newString = trim($string, "m") . "<br>";
echo strlen($newString);  

$outputArray = [];

foreach ($inputArray as $item) {
    $sku = $item['sku'];

    if (isset($outputArray[$sku])) {
        // Item with this SKU already exists, update the quantity
        $outputArray[$sku]['quantity'] += $item['quantity'];
    } else {
        // New item with this SKU, add it to the output array
        $outputArray[$sku] = [
            'product_name' => $item['product_name'],
            'sku' => $sku,
            'quantity' => $item['quantity'],
            'image' => $item['image'],
            'price' => $item['price']
        ];
    }
}

// Convert the associative array to indexed array
$outputArray = array_values($outputArray);

// Output the result
echo json_encode($outputArray, JSON_PRETTY_PRINT);
?>