<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		h1{ font-size: 25px; }
		#box{
			background: lightgreen;
			padding: 10px 30px;
			border: 1px solid #000;
			position:relative;
		}
	</style>
</head>
<body>
	<h1>jQuery Offset & Position Method</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum 	<span>dolor, sit amet</span>, consectetur adipisicing elit. Aperiam, obcaecati quod nisi ipsum velit blanditiis eum facere consequatur iste iure numquam odit rem repellat laudantium tenetur ad eaque, dolore aliquid.</p>
	</div>
	<br>
	<button id="positionBtn">Position</button>
	<button id="offsetBtn">Offset</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Offset & Position Method*/
		$(document).ready(function(){
			$('#positionBtn').click(function(){
				//console.log($("#box h2").position());

				var x = $("#box h2").position();
				console.log("TOP : " + x.top + " left : " + x.left);
			});

			$('#offsetBtn').click(function(){
				//console.log($("#box h2").offset());

				//var x = $("#box h2").offset();
				//console.log("TOP : " + x.top + " left : " + x.left);

				$("#box h2").offset({top:100,left:100});
			});
		});
	</script>
</body>
</html>