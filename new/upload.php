<?php
include('includes/db_connection.php');
include('includes/file_functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $destination = 'uploads/';

  foreach ($_FILES['files']['tmp_name'] as $index => $tmp_name) {
    $file_name = $_FILES['files']['name'][$index];
    $file_path = $destination . $file_name;

    move_uploaded_file($tmp_name, $file_path);

    createFile($file_name);
  }

  echo 'Files uploaded successfully!';
}
?>