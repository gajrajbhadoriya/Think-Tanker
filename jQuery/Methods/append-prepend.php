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
	<h1>jQuery Append & Prepend Methods</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<!-- <ol>
		<li>List Item 1</li>
		<li>List Item 2</li>
		<li>List Item 3</li>
		<li>List Item 4</li>
	</ol> -->
	<br>
	<button id="appendBtn">Append</button>
	<button id="prependBtn">Prepend</button>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Append &  Prepend Method*/
		$(document).ready(function(){
			$('#appendBtn').click(function(){
				$('#box').append("<h2>Yahoo Baba</h2>");
			});

			$('#prependBtn').click(function(){
				$('#box').prepend("<h3>Yahoo Baba</h3>");
			});

			/*$('#appendBtn').click(function(){
				$('ol').append("<li>List Item new</li>");
			});

			$('#prependBtn').click(function(){
				$('ol').prepend("<li>New List Item </li>");
			});*/
		});
	</script>
</body>
</html>