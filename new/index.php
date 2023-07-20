<!DOCTYPE html>
<html>
<head>
  <title>Multiple File Upload</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <h1>Multiple File Upload</h1>

  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <input type="submit" value="Upload">
  </form>

  <h2>Uploaded Files:</h2>

  <?php
  include('includes/db_connection.php');
  include('includes/file_functions.php');

  $files = getAllFiles();
  if ($files) {
    echo '<ul>';
    foreach ($files as $file) {
      echo '<li>';
      echo '<a href="uploads/' . $file['filename'] . '">' . $file['filename'] . '</a>';
      echo ' [<a href="edit.php?id=' . $file['id'] . '">Edit</a>]';
      echo ' [<a href="delete.php?id=' . $file['id'] . '">Delete</a>]';
      echo '</li>';
    }
    echo '</ul>';
  } else {
    echo '<p>No files uploaded yet.</p>';
  }
  ?>

</body>
</html>