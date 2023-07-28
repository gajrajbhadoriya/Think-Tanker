<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is array</title>
    <script>
        let array = ["Aman","Chaman","Raman"];
            document.write("Array Values:  " + array + "<br>");
        let b = array.concat("Kaman","Suman");
            document.write("concat() function used for concat two array :  " + b + "<br>");
        let c = array.concat(b);
            document.write("concat() function used for concat two array :  " + c + "<br>");
        let d = c.join("-");
            document.write("join() function used for array values convert in one value :  " + d + "<br>");
        let e = Array.isArray(array);
            document.write("isArray() check value is array or not its give you answer true and false :  " + e + "<br>");
        let f = Array.isArray(b);
            document.write("isArray() check value is array or not its give you answer true and false :  " + f + "<br>");
    </script>
</head>
<body>

</body>
</html>