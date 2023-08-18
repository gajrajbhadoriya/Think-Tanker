<?php

// this my file name they contains json object
$jsonString = "my.json";

$jsonData = file_get_contents($jsonString);

$convertArray = json_decode($jsonData, true);

echo "<table  border='1' cellpadding='10px' width='100px'>";

foreach($convertArray as list("id" => $id, "title" => $title , "body" => $body)){
    echo "<tr><td>{$id}</td><td>{$title}</td><td>{$body}</td></tr>";
}



// echo "<pre>";
// print_r($convertArray);
// echo "</pre>";


?>