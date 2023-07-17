<?php

$filename = "example.txt";

if (file_exists($filename)) {
    if (unlink($filename)) {
        echo "File deleted successfully.";
    } else {
        echo "Unable to delete the file.";
    }
} else {
    echo "The file does not exist.";
}

?>

<!-- echo "# Think-Tanker" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/gajrajbhadoriya/Think-Tanker.git
git push -u origin main -->