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
	<h1>jQuery After & Before Methods</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<button id="afterBtn">After</button>
	<button id="beforeBtn">Before</button>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery After &  Before Method*/
		$(document).ready(function(){
			$('#afterBtn').click(function(){
				$('#box').after("<h3> After : Yahoo Baba</h3><p>this is Just text.</p>");
			});

			$('#beforeBtn').click(function(){
				$('#box').before("<h3>Before : Yahoo Baba</h3>");
			});
		});
	</script>
</body>
</html>