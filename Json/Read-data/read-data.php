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
    $(document).ready(function(){
        $.ajax({
            url: "https://jsonplaceholder.typicode.com/posts",
            type : "GET",
            success : function(data){
                $.each(data, function(keys, values){
                    console.log(values.id + " " + values.title);
                })
            }
        })


        //this code use to get your json file records using json
        // $.ajax({
        //     url: "my.json",
        //     type : "GET",
        //     success : function(data){
        //         $.each(data, function(keys, values){
        //             console.log(values.id + " " + values.title);
        //         })
        //     }
        // })
    })
</script>
</html>