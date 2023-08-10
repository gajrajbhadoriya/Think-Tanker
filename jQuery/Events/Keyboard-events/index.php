<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }

		#box{
			border:1px solid #000;
			background: pink;
			padding: 10px 10px;
		}
	</style>
</head>
<body>
	<h1>jquery Keyboard Events</h1>
	<div id="box" class="test">
		<h2>Test Box</h2>
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum sint, culpa suscipit sapiente, veritatis debitis quis atque laboriosam commodi voluptate non architecto.</p>
	</div>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script>
		$(document).ready(function(){
			$('body').keypress(function(){
				$(this).css('background-color','orange');
			});

			$('body').keydown(function(){
				$(this).css('background-color','orange');
			});

			$('body').keyup(function(){
				$(this).css('background-color','green');
			});
		});
	</script>
</body>
</html>