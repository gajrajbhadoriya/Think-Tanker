<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn jquery</title>
    <style>
        body{
            font-family: arial;
        }
        h1{
            font-size: 25px;
        }
        #box{
            border: 1px solid #e58e26;
            background: #f8c291;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>jQuery Event.data</h1>
    <div id="box">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ducimus ipsa perspiciatis, in sed exercitationem aut provident ab vero molestiae. Sint praesentium libero, rerum consequuntur quae sequi ea voluptas placeat!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint tempora fuga a eaque magnam nulla vero magni, modi pariatur fugiat ut recusandae maiores dignissimos repellat dolore illo soluta libero quibusdam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, nemo fuga a, repellendus delectus eveniet tenetur vero quis reiciendis, autem ad obcaecati facere in et maiores quo impedit quod aut!</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        /* jQuery Event.data*/
        $(document).ready(function (){
            $('p').each(function (i){
                $(this).on("click",{value:i},function(event){
                    alert(event.data.value);
                });
            });
        });
    </script>
</body>
</html>