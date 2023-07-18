<?php
// Database configuration
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

// Function to establish a database connection
function openDatabaseConnection() {
  global $host, $username, $password, $database;

  $conn = mysqli_connect($host, $username, $password, $database);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  return $conn;
}

// Function to close the database connection
function closeDatabaseConnection($conn) {
  mysqli_close($conn);
}
?>