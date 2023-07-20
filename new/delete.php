<?php
include('includes/db_connection.php');
include('includes/file_functions.php');

if (isset($_GET['id'])) {
  $fileId = $_GET['id'];

  $file = getFileById($fileId);

  if (!$file) {
    echo 'File not found.';
    exit;
  }
} else {
  echo 'Invalid request.';
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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