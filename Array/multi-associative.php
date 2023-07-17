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

echo "<pre>";
print_r($studentMarks);
echo "</pre>";

foreach($studentMarks as $key => $value){
    echo $key ;
    foreach($value as $newValue){
        echo $newValue . " " ;
    }
}
