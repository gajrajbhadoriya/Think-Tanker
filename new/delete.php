<?php
include('includes/db_connection.php');
include('includes/file_functions.php');

// Check if file ID is provided
if (isset($_GET['id'])) {
  $fileId = $_GET['id'];

  // Retrieve the file details by ID
  $file = getFileById($fileId);

  if (!$file) {
    echo 'File not found.';
    exit;
  }
} else {
  echo 'Invalid request.';
  exit;
}

// Delete the file
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Delete the file record from the database
  $result = deleteFile($fileId);

  if ($result) {
    // Delete the physical file
    $filePath = 'uploads/' . $file['filename'];
    unlink($filePath);

    echo 'File deleted successfully!';
  } else {
    echo 'Failed to delete file.';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Delete File</title>
</head>
<body>
  <h1>Delete File</h1>

  <p>Are you sure you want to delete the file: <?php echo $file['filename']; ?>?</p>

  <form action="" method="POST">
    <input type="submit" value="Delete">
  </form>
</body>
</html>