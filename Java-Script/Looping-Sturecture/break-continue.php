<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do-While loop</title>
    <script>
        for(let a = 1; a < 10; a++){
            if(a == 3){
                document.write("fav-number" +  a +"<br>");
                continue;
            }
            if(a == 8){
                document.write("Stop here" +  a +"<br>");
                break;
            }
            document.write("number" + a + "<br>");
        }   
    </script>
</head>
<body>
    
</body>
</html>