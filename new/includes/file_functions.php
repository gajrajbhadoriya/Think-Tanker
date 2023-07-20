<?php
include('db_connection.php');

// Create a new file record in the database
function createFile($filename) {
  $conn = openDatabaseConnection();

  $query = "INSERT INTO files (filename) VALUES ('$filename')";
  $result = mysqli_query($conn, $query);

  closeDatabaseConnection($conn);

  return $result;
}

// Get all files from the database
function getAllFiles() {
  $conn = openDatabaseConnection();

  $query = "SELECT * FROM files";
  $result = mysqli_query($conn, $query);

  $files = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $files[] = $row;
  }

  closeDatabaseConnection($conn);

  return $files;
}

// Get a specific file by its ID
function getFileById($fileId) {
  $conn = openDatabaseConnection();

  $query = "SELECT * FROM files WHERE id = '$fileId'";
  $result = mysqli_query($conn, $query);

  $file = mysqli_fetch_assoc($result);

  closeDatabaseConnection($conn);

  return $file;
}

// Update the filename of a file
function updateFile($fileId, $newFilename) {
  $conn = openDatabaseConnection();

  $query = "UPDATE files SET filename = '$newFilename' WHERE id = '$fileId'";
  $result = mysqli_query($conn, $query);

  closeDatabaseConnection($conn);

  return $result;
}

// Delete a file by its ID
function deleteFile($fileId) {
  $conn = openDatabaseConnection();

  $query = "DELETE FROM files WHERE id = '$fileId'";
  $result = mysqli_query($conn, $query);

  closeDatabaseConnection($conn);

  return $result;
}
?>