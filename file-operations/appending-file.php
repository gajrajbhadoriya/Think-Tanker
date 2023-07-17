<?php

$filename = "example.txt";
$file = fopen($filename, "a"); // Open the file in append mode

if ($file) {
    $text = "This is some additional text.";
    fwrite($file, $text); // Append the text to the file
    fclose($file); // Close the file
    echo "Data appended to the file.";
} else {
    echo "Unable to open the file.";
}

?>