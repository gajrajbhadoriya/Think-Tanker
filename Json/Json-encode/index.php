<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    // you ca use direct json getJSON function 
        // $.getJSON(
        //     "fetch-json.php",
        //     function(data){
        //         console.log(data);
        //     }
        // )

        // fetch data using ajax function

        $.ajax({
            url : "fetch-json.php",
            type : "POST",
            dataType : "JSON",
            success :  function(data){
                console.log(data);
            }
        })

        // fetch single record of json using ajax

        // $.ajax({
        //     url : "fetch-json.php",
        //     type : "POST",
        //     data : {id : 2},
        //     success :  function(data){
        //         console.log(data);
        //     }
        // })
</script>
</html>