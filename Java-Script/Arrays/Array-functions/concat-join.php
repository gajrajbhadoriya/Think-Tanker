<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed-Array</title>
    <script>
        let array = ["Aman","Chaman","Raman"];
            document.write("Array Values:  " + array + "<br>");
            let b = array.concat("Kaman","Suman");
            document.write("concat() function used for concat two array :  " + b + "<br>");
            // array.unshift("Kiran");
            // document.write("unshift() function used for add first element in array :  " + array + "<br>");
            let c = array.concat(b);
            document.write("concat() function used for concat two array :  " + c + "<br>");
            let d = c.join("-");
            document.write("join() function used for array values convert in one value :  " + d + "<br>");
    </script>
</head>
<body>
    
</body>
</html>