<?php

$filename = "example.txt";
$file = fopen($filename, "r"); // Open the file in read mode

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line; // Display each line of the file
    }
    fclose($file); // Close the file
} else {
    echo "Unable to open the file.";
}


?>