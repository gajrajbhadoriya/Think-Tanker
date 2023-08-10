<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		
		#box{
			background: pink;
			padding:10px;
			border:1px solid #000;
		}
	</style>
</head>
<body>
	<h1>Form Events</h1>
	<form action="" id="sform">
		<label for="">Name</label><input type="name" id="sname"><br><br>
		<label for="">class</label><input type="text" id="sclass"><br><br>
		<label for="">Country</label>
		<select id="scountry">
			<option value="India">India</option>
			<option value="Pakistan">Pakistan</option>
			<option value="Bangladesh">Bangladesh</option>
			<option value="Sri Lanka">Sri Lanka</option>
			<option value="Nepal">Nepal</option>
		</select><br><br>
		<input type="submit">
	</form>
	<div id="test" style="border:1px solid red;margin-top:20px;"></div>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
        $(document).ready(function(){
            $('#sname,#sclass,#scountry').focus(function(){
                $(this).css('background-color', 'lime');
            });

            $('#sname,#sclass,#scountry').blur(function(){
                $(this).css('background-color', '');
            });

            $('#scountry').change(function(){
                $(this).css('background-color', 'pink');
            });

            $('#scountry').change(function(){
                let a = $(this).val();
                $('#test').html(a);
            });

            $('#sclass').select(function(){
                $(this).css('background-color', 'yellow');
            });

            $('#sform').submit(function(){
                alert("Success");
            });
        })
    </script>
</body>
</html>