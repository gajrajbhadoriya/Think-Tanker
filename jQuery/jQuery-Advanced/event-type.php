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
	<h1>jQuery Event.type Property</h1>
	<div id="box"></div>
	<h2></h2>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Event.type Property*/
		$(document).ready(function(){
			$('#box').on("click dbclick mouseover mouseout",function(event){
				$('h2').html("Event: "+ event.type)
			});
		});
	</script>
</body>
</html>