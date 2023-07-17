<?php

$employeeData = [
    [1, "Meet", "Laravel", 44000 ],
    [2, "Ronak", "Laravel", 10000 ],
    [3, "Vaibhav", "Laravel", 70000 ],
    [1, "Naineel", "Laravel", 5000 ]
];

// echo "<pre>";
// print_r($employeeData);
// echo "</pre>";

foreach($employeeData as $value1){
    foreach($value1 as $value2){
        echo "<pre>";
         echo $value2 ;
         echo "</pre>";
    }
}