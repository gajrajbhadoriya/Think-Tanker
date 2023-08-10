<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<input type="text" id="textbox1" placeholder="Enter text">
<button id="switchButton">Switch</button>
<input type="text" id="textbox2" placeholder="Moved text">



<script>
$(document).ready(function(){
    $('#switchButton').click(function(){
        let value1 = $('#textbox1').val;
        let value2 = $('#textbox2').val;

        if(value2 !== ""){
            $('#textbox1').val(value1);
            $('#textbox2').val(" ");
        }else
        {
            $('#textbox2').val(value2);
            $('#textbox1').val(" ");
        }
    })
})
</script>

</body>
</html>