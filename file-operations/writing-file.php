<?php

$filename = "example.txt";
$file = fopen($filename, "w"); // Open the file in write mode

if ($file) {
    $text = "This is some sample text.";
    fwrite($file, $text); // Write the text to the file
    fclose($file); // Close the file
    echo "Data written to the file.";
} else {
    echo "Unable to open the file.";
}


?>