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
	<h1>jQuery hasClass Method</h1>
	<div id="box" class="">
		<h2 class="test">Test Box</h2>
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
	</div>
	<br>
	<button id="hasClassBtn">hasClass</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery hasClass Method*/
		$(document).ready(function(){
			$('#hasClassBtn').click(function(){
				//console.log($('#box h2').hasClass('test'));

				var x = $('#box h2').hasClass('test');
				if(x == true){
					console.log('Yes');
				}else{
					console.log('No');
				}
			});
		});
	</script>
</body>
</html>