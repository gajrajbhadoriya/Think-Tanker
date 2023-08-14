<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>


    <input type="text" id="textbox1">
    <button id="switchButton">Switch</button>
    <input type="text" id="textbox2"><br><br>


    <input type="text" id="textbox">
    <button id="switchButton">Switch</button>
    <input type="text" id="textbox"><br><br>

    <input type="text" id="textbox">
    <button id="switchButton">Switch</button>
    <input type="text" id="textbox"><br><br>

    <input type="text" id="textbox">
    <button id="switchButton">Switch</button>
    <input type="text" id="textbox"><br><br>



<script>
$(document).ready(function(){
    $('#switchButton').click(function(){
        let value1 = $('#textbox1').val();
        let value2 = $('#textbox2').val();

        if (value2 !== "") {
            $("#textbox1").val(value2);
            $("#textbox2").val("");
        } else {
            $("#textbox2").val(value1);
            $("#textbox1").val("");
        }
    })
    })

    $(document).ready(function(){
    $('.switchButton').click(function(){
        var group = $(this).closest('div');  // Get the parent div
        var value1 = group.find('.textbox1').val();
        var value2 = group.find('.textbox2').val();

        if (value2 !== "") {
            group.find(".textbox1").val(value2);
            group.find(".textbox2").val("");
        } else {
            group.find(".textbox2").val(value1);
            group.find(".textbox1").val("");
        }
    });
});
</script>

</body>
</html>