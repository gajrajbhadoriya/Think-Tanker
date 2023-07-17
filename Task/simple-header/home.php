<?php

if(isset($_GET["button1"])) {
    header("location:Country-time.php");
} elseif(isset($_GET["button2"])) {
    header("location:multipal-file-upload.php");
} elseif(isset($_GET["button3"])) {
    header("location:form-validation.php");
} elseif(isset($_GET["button4"])) {
    header("location:image-resize.php");
} elseif(isset($_GET["button5"])) {
    header("location:preg-match.php");
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
    <style>
        tr, td {
            padding: 15px;
        }
    </style>
    <form action="" method="get">
        <table border="1", align="center" bgcolor="tan" cellspeacing="2", cellpedding="2">
            <tr>
                <td>
                    <input type="submit" name="button1" value="Country Time">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="button2" value="Multipal-file-Upload">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="button3" value="Server-Side-validation">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="button4" value="Resize-Image">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="button5" value="Regular-Expression">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>