<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<input type="text" class="textbox" placeholder="Enter text">
<input type="text" class="textbox" placeholder="Moved text">
<input type="text" class="textbox" placeholder="Enter text">
<input type="text" class="textbox" placeholder="Moved text">
<input type="text" class="textbox" placeholder="Enter text">
<input type="text" class="textbox" placeholder="Moved text">
<input type="text" class="textbox" placeholder="Enter text">
<input type="text" class="textbox" placeholder="Moved text">

<button id="switchButton">Switch</button>

<script>
$(document).ready(function() {
    $("#switchButton").click(function() {
        $(".textbox").each(function(index) {
            if (index % 2 === 0) {
                var currentVal = $(this).val();
                var nextVal = $(".textbox").eq(index + 1).val();
                $(".textbox").eq(index + 1).val(currentVal);
                $(this).val(nextVal);
            }
        });
    });
});
</script>

</body>
</html>