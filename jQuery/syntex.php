<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
      <script>
         $(document).ready(function(){
            document.write("hello world");
         })
      </script>
</body>
</html>

$(document).ready(function() {
    $("#switchButton").click(function() {
        var value1 = $("#textbox1").val();
        var value2 = $("#textbox2").val();
        
        if (value2 !== "") {
            $("#textbox1").val(value2);
            $("#textbox2").val("");
        } else {
            $("#textbox2").val(value1);
            $("#textbox1").val("");
        }
    });
});