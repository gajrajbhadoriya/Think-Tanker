<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed-Array</title>
    <script>
        let array = new Array();

        array[0] = 1;
        array[1] = true;
        array[2] = 1.5;
        array[4] = "meet";
        let sum = 0;
        // for(get=0; get<=3; get++){ thi
        //     array[get] = prompt("enter your values"); you want to get your input though get values then this code preferences
        // }
        
        for(a=0; a<= 4; a++){
            document.write("Array Values:" + array[a] + "<br>");
            sum = sum + array[a];
        }
        document.write("Total Sum:" + sum);
    </script>
</head>
<body>
    
</body>
</html>