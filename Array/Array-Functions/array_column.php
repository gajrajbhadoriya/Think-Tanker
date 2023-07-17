<?php

$studentMarks = [
    "krishna" => [
        "Laravel"=> 70,
        "Python" => 60,
        "React" => 65
    ],
    "Hiren" => [
        "Laravel"=> 70,
        "Python" => 60,
        "React" => 65
    ],
    "Meet" => [
        "Laravel"=> 70,
        "Python" => 60,
        "React" => 65
    ]
];

$newArray = array_column($studentMarks, "Laravel");

echo "<pre>";
print_r($newArray);
echo "</pre>";