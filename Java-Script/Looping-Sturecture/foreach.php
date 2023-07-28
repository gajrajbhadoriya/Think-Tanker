<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
    <script>
        let array = [10,20,15,22,18];
            document.write("Array Values:  " + array + "<br>");
        
            array.forEach(function(value, keys){
                document.write(keys + "=>" + value + "<br>");
            })
    </script>
</head>
<body>

</body>
</html>