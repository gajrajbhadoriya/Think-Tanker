<?php

if(isset($_FILES['image'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $fileValue = $_FILES["image"]["name"] . "<br>";
    $fileSize = $_FILES["image"]["size"] . "<br>";
    $fileTmp = $_FILES["image"]["tmp_name"] . "<br>";
    $fileType = $_FILES["image"]["type"] . "<br>";

    move_uploaded_file($fileTmp, "media/" . $fileValue); // this function used for store file in server
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <table border="2">
    <tr>
        <td>
            <input type="file" name="image[]" multiple>
        </td>
        <td>
            <input type="submit" name="submit">
        </td>
    </tr>
    </table>
    </form>
</body>
</html>