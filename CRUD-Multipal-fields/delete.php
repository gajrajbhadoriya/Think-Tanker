<?php
include 'includes/db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM client WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php");
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
