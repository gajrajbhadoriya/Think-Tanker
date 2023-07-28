<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidemention</title>
    <script>
        let cars = [
           ["Volvo",22,18],
           ["BMW",15,13],
           ["Saab",5,2],
           ["Land Rover",17,15]
        ];

        for(let a = 0; a < 3; a++){
            for(let b = 0; b < 3; b++){
                document.write(cars[a][b] + " ");
            }
            document.write("<br>");
        }
    </script>

</head>
<body>
    
</body>
</html>