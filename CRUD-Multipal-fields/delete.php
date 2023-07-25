<?php
include 'includes/db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM client WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $sqlDeletePhotos = "DELETE FROM photos WHERE user_id = " . $id;
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
