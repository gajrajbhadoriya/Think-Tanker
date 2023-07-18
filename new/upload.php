<?php
include('includes/db_connection.php');
include('includes/file_functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Destination directory for uploaded files
  $destination = 'uploads/';

  // Iterate over uploaded files
  foreach ($_FILES['files']['tmp_name'] as $index => $tmp_name) {
    $file_name = $_FILES['files']['name'][$index];
    $file_path = $destination . $file_name;

    // Move file to destination directory
    move_uploaded_file($tmp_name, $file_path);

    // Create file record in the database
    createFile($file_name);
  }

  echo 'Files uploaded successfully!';
}
?>