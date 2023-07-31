<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        let array = [
                {
                "color": "purple",
                "type": "minivan",
                "registration": new Date('2012-02-03'),
                "capacity": 7
                },
                {
                "color": "purple",
                "type": "minivan",
                "registration": new Date('2012-02-03'),
                "capacity": 7
                }
            ]

            for(let a = 0; a < array.length; a++){
                document.write(array[a].color + "<br>");
            }
    </script>
</head>
<body>
    
</body>
</html>