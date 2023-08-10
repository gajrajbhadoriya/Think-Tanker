<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		h1{ font-size: 25px; }
		#test{
			background: pink;
			padding: 5px;
		}
		.red{ color:red; }
	</style>
</head>
<body>
	<h1>jQuery WrapAll() & wrapInner()</h1>
	<p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Veritatis consectetur, esse doloremque iusto sequi quia! Omnis tempora fuga dolore aut quae, placeat reprehenderit minus voluptates, impedit nisi totam cupiditate alias.</p>
	<p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Veritatis consectetur, esse doloremque iusto sequi quia! Omnis tempora fuga dolore aut quae, placeat reprehenderit minus voluptates, impedit nisi totam cupiditate alias.</p>
	<br>
	<button id="wrapAllBtn">WrapAll</button>
	<button id="wrapInnerBtn">WrapInner</button>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery WrapAll() & wrapInner() */
		$(document).ready(function(){
			$('#wrapAllBtn').click(function(){
				$('p').wrapAll('<div id="test"></div>');
			});

			$('#wrapInnerBtn').click(function(){
				$('h1').wrapInner('<span class="red"></span>');
			});
		});
	</script>
</body>
</html>