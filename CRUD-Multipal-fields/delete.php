<?php
include 'includes/db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $photos = explode(',', $_GET['photos']);
    $sql = "DELETE FROM client WHERE id=$id";
    // $result = mysqli_query($conn, $sql);
    // if ($result) {
    //     foreach ($photos as $imageName) {
    //         $imageFilePath = 'uploads/' . $imageName;
    //         if (file_exists($imageFilePath)) {
    //             unlink($imageFilePath);
    //         }
    //     }
    // }
    $sqlDeletePhotos = "DELETE FROM photos WHERE id = " . $id;
    $resultPhotos = mysqli_query($conn, $sqlDeletePhotos);
    if ($result) {
        header("Location: view.php");
        exit();
    } else {
        $error_msg = "Failed to delete data.";
    }




}

mysqli_close($conn);

?>
<?php if ($error_msg) { ?>
    <p><?php echo $error_msg; ?></p>
<?php } ?>
