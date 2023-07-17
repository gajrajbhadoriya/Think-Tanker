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

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
    }
    
    $stringValue = "hello my name is meet. currently i'm pursing my mca.";
    
    $expression = preg_match("/$name/i", $stringValue);// i represents case insensitive expression 
    
    if($expression) {
        $result = "match Success";
    } else {
        $result = "Not match..!!!";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr, td {
            padding: 15px;
        }
    </style>
</head>
<body>
    <h3 align="center">hello my name is meet. currently i'm pursing my mca</h3>
    <form action="" method="post">
        <table border="1", align="center" bgcolor="tan">
            <h1>
            <tr>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input type="submit" name="submit" value="Regular-Expression">
                </td>
            </tr>
            <?php if (isset($result)) : ?>
            <tr>
                <td>
                    <?php echo $result ?>
                </td>
            </tr>
            <?php endif; ?>
        </table>
    </form>
</body>
</html>
    
