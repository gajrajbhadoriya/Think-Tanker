<?php

// Associative array example
$employeeList = array(
    "meet patel" => 10,
    "vaibhav patel" => 20,
    "hiren patel" => 30
);

$employeeList["hiren patel"] = 50; // change the value 30 to 50 

foreach($employeeList as $key => $value) {
    echo "<pre>";
        var_dump($employeeList);
    echo "</pre>";
}