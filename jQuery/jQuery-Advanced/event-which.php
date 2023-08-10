<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		h1{ font-size: 25px; }
		#box{
			border: 1px solid #6c5ce7;
			background: #a29bfe;
			width: 400px;
			height: 400px;
		}
	</style>
</head>
<body>
	<h1>jQuery Event.which Property</h1>
	<div id="box"></div>
	<br>
	<input type="text" id="inputbox">
	<br>
	<h2></h2> 

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Event.which Property*/
		$(document).ready(function(){
			$('#box').on("mouseover mouseout mousedown",function(event){
				$('h2').html(event.type + ": " + event.which);
			});

			$('#inputbox').on("keydown",function(){
				$('h2').html(event.type + ": " + event.which);
			});
		});
	</script>
</body>
</html>