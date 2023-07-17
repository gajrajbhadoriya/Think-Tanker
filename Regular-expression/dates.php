<?php

$date_validation_regex = "/^[0-9]{1,2}\\/[0-9]{1,2}\\/[0-9]{4}$/"; 
echo preg_match($date_validation_regex, '12/12/2022'); // returns 1
echo "<br>";
$extract_date_pattern = "/[0-9]{1,2}\\/[0-9]{1,2}\\/[0-9]{4}/";
$string_to_match = 'I\'m on vacation from 1/18/2021 till 1/29/2021';
preg_match_all($extract_date_pattern, $string_to_match, $matches);
print_r($matches[0]);

?>