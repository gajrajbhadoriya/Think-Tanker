<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		h1{ font-size: 25px; }
		#box{
			background: lightgreen;
			padding: 30px 30px;
			border: 10px solid #000;
		}
	</style>
</head>
<body>
	<h1>jQuery Width & Height Methods</h1>
	<div id="box">
		<h2>Test Box</h2>
		<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, similique quasi. Commodi molestias tempore impedit, quos cumque harum, ad quibusdam fugiat! Earum excepturi assumenda, libero dolores expedita, aliquid provident saepe?</p>
	</div>
	<br>
	<button id="widthBtn">Width</button>
	<button id="heightBtn">Height</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Width &  Height Method*/
		$(document).ready(function(){
			$('#widthBtn').click(function(){
				$("#box").width("400px");


				console.clear();
				console.log("Width : " + $('#box').width());
				console.log("InnerWidth : " + $('#box').innerWidth());
				console.log("OuterWidth : "  + $('#box').outerWidth());
				console.log("OuterWidth(true) : " + $('#box').outerWidth());
			});

			$('#heightBtn').click(function(){
				$("#box").height("500px");

				console.clear();
				console.log("Height : " + $('#box').height());
				console.log("InnerHeight : " + $('#box').innerHeight());
				console.log("OuterHeight : "  + $('#box').outerHeight());
				console.log("OuterHeight(true) : " + $('#box').outerHeight());
			});
		});
	</script>
</body>
</html>