<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		#box{
			background: pink;
			padding: 10px;
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<h1>jQuery Get Methods</h1>
	<div id="box" class="test abc">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus. Dolorum tempore facilis asperiores veritatis, cumque velit debitis voluptatibus atque? Dolorum iste, provident ut ullam fuga incidunt quos veritatis. Est ratione magnam id sint ad vero quo architecto distinctio, dignissimos, maiores. Ipsa dicta libero voluptatibus at sed eius.</p>
	</div><br>
	<h1>jQuery Get Methods</h1>
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
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
		$(document).ready(function(){
			//var a = $('#box').html();
			//var a = $('body').html();
			//var a = $('#box p').html();
			//var a = $('#box').text();
			//var a = $('#box').attr('class');
			//console.log(a);

			$('#sform').submit(function(){
				var name = $('#sname').val();
				var classname = $('#sclass').val();
				var country = $('#scountry').val();
				alert("Hello " + name + " class: " +classname  + "country : " + country);
			});

		});
	</script>
</body>
</html>