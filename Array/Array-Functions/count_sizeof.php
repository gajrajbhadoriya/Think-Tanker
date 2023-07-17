<?php

$food = ['vadapav', 'dabeli', 'puff'];

echo "(1)Count And Size Of Functions<br><br>";
echo "count function is use for count array value " . count($food) . "<br>";
echo "sizeof function is use for count array value " . sizeof($food)  . "<br>";

$newFood = [
    'fruits' => ['orange', 'banana', 'apple'],
    'veggie' => ['carrot', 'collred', 'pea']
];

echo "Return associatve value count" . count($newFood, 1);
