<?php

// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'swatantra';

// Function to establish a database connection
if (!function_exists('openDatabaseConnection')) {
    function openDatabaseConnection()
    {
        global $host, $username, $password, $database;

        $conn = mysqli_connect($host, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
    }
}

// Function to close the database connection
if (!function_exists('closeDatabaseConnection')) {
    function closeDatabaseConnection($conn)
    {
        mysqli_close($conn);
    }
}
