<?php

// echo "This is first page content";

if(isset($_GET["button1"])){
    header("location:home.php");
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
</body>
</html>

<?php
// phpinfo();
// die();
if(isset($_POST['submit'])) {
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    // die();
    $file = $_FILES['file']['tmp_name'];
    list($width, $height) = getimagesize($file);
    $newWidth = $width/2;
    $newHeight = $height/2;
    if($_FILES['file']['type'] == 'image/jpeg') {
        $newImage = imagecreatetruecolor($newWidth, $newHeight);
        $source = imagecreatefromjpeg($file);
        imagecopyresized($newImage, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        $fileName = time(). '.jpg';
        imagejpeg($newImage, 'media/'. $fileName);
    }
    elseif($_FILES['file']['type'] == 'image/png'){
        $newImage = imagecreatetruecolor($newWidth, $newHeight);
        $source = imagecreatefrompng($file);
        imagecopyresized($newImage, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
        $fileName = time(). '.png';
        imagepng($newImage, 'media/'. $fileName);
    }
    else{
        echo "please enter jpeg or png file";
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="submit">
</form>
