<?php
$cookiesName = "user";
$cookiesValue = "Meet Patel";

setcookie($cookiesName, $cookiesValue, time() + 60 * 1, "/"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        echo "Welcome " . $_COOKIE[$cookiesName];
    ?>
</body>
</html>