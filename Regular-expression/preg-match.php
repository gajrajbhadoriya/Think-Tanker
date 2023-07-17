<?php

$stringValue = "hello my name is meet. currently i'm pursing my mca.";

$expression = preg_match("/name/i", $stringValue);

if($expression){
    echo "match Success";
}
else{
    echo "Not match";
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
    
</body>
</html>