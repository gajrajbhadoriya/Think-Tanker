<?php
include 'includes/db_connection.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $main_id = $_GET['main_id'];
    $photoIndex = $_GET['photos'];

        $sqlDeletePhoto = "DELETE FROM photos WHERE photo_id = '$id'";
        $resultDeletePhoto = mysqli_query($conn, $sqlDeletePhoto);

        if ($resultDeletePhoto) {
            $imageFilePath = 'uploads/' . $photoIndex;
            if (file_exists($imageFilePath)) {
                unlink($imageFilePath);
            }
            header('Location: edit.php?id=' . $main_id);
            exit();
        }
    }

mysqli_close($conn);

?>
