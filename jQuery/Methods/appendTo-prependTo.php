<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		h1{ font-size: 25px; }
		#box{
			background: lightgreen;
			padding: 10px;
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<h1>jQuery AppendTo & PrependTo Methods</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<button id="appendBtn">AppendTo</button>
	<button id="prependBtn">PrependTo</button>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery AppendTo &  PrependTo Method*/
		$(document).ready(function(){
			$('#appendBtn').click(function(){
				$("<h3>AppendTo : code</h3>").appendTo("#box");
			});

			$('#prependBtn').click(function(){
				$("<h3>PrependTo : code</h3><p>this is just text.</p>").prependTo("#box");
			});
		});
	</script>
</body>
</html>