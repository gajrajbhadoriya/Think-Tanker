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
	<h1>jQuery Empty & Remove Methods</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<button id="emptyBtn">Empty</button>
	<button id="removeBtn">Remove</button>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Empty &  Remove Method*/
		$(document).ready(function(){
			$('#emptyBtn').click(function(){
                $('#box h2').empty();
            })

			$('#removeBtn').click(function(){
				$('#box').remove();
			});
		});
	</script>
</body>
</html>