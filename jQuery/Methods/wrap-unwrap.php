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
		#test{
			background: pink;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h1>jQuery Wrap() & Unwrap()</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<button id="wrapBtn">Wrap</button>
	<button id="unwrapBtn">Unwrap</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery  Wrap() & Unwrap() */
		$(document).ready(function(){
			$('#wrapBtn').click(function(){
				$('#box p').wrap('<div id="test"></div>');
			});

			$('#unwrapBtn').click(function(){
				$('#box p').unwrap();
			});
		});
	</script>
</body>
</html>