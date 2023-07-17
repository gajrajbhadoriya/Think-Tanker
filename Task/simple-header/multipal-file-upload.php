<?php

echo "This is second page content";

if(isset($_GET["button1"])) {
    header("location:home.php");
}

if(isset($_FILES['image'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    foreach($_FILES['image']['name'] as $key=>$value) {
        $rand = rand('100000', '200000');
        $file= $rand. "_" . $value;
        move_uploaded_file($_FILES['image']['tmp_name'][$key], 'media/' . $file); // this function used for store file in server
        // insert into files(image) values('$file');
    }
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
    <form action="" method="get">
        <input type="submit" name="button1" value="back to home">
    </form>
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