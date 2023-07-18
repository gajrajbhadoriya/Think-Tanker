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

// Update file details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $newFilename = $_POST['filename'];

  // Update the file record in the database
  $result = updateFile($fileId, $newFilename);

  if ($result) {
    echo 'File details updated successfully!';
  } else {
    echo 'Failed to update file details.';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit File</title>
</head>
<body>
  <h1>Edit File</h1>

  <form action="" method="POST">
    <label for="filename">Filename:</label>
    <input type="text" id="filename" name="filename" value="<?php echo $file['filename']; ?>">
    <br>
    <input type="submit" value="Update">
  </form>
</body>
</html>