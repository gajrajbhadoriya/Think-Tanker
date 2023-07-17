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
    $country = $_POST["country"];
    date_default_timezone_set($country); 
    $result = date("h:i:s");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World-Time</title>
</head>
<body>
    <form action="" method="post">  
    <label for="cars">Choose a Country:</label>
    <select name="country" id="cars">
        <option value="Asia/Dubai">Dubai</option>
        <option value="Asia/Karachi">Karachi</option>
        <option value="Asia/Kolkata">Kolkata</option>
        <option value="Asia/Hong_Kong">Hong Kong</option>
        <option value="Asia/Colombo">Colombo</option>
        <option value="America/Mexico_City">Mexico City</option>
        <option value="America/New_York">New York</option>
        <option value="America/Toronto">Toronto</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php if (isset($result)) : ?>
        <table border="1" cellspacing="1" cellpadding="1">
            <tr>
                <td>Country</td>
                <td><?php echo $result; ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>