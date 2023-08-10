<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn jquery</title>
</head>
<style>
	body{ font-family: arial; }
	h1{ font-size: 25px;}
	#main-outer{
		border: 1px solid #8e44ad;
		background: #a29bfe;
		padding: 10px 10px;
		width: 600px;
		height: 600px;
		margin: 0 auto;
	}
	#outer{
		border: 1px solid #ff9f43;
		background: #fdcb6e;
		padding: 10px 10px;
		width: 550px;
		height: 500px;
		margin: 0 auto;
	}
	#inner{
		border: 1px solid #f78fb3;
		background: #f8a5c2;
		padding: 10px 10px;
		width: 500px;
		height: 400px;
		margin: 0 auto;
	}
	#inner div{
		border: 1px solid #3dc1d3;
		background: #63cdda;
		padding: 10px 10px;
		width: 70px;
    	height: 100px;
		display: inline-block;
		text-align: center;
		margin: 0 15px 0 0;
	}
</style>
<body>
	<h1>jQuery Descendant Methods </h1>
	<div id="main-outer" style="position: relative;">
		<h2 class="test">Main Outer</h2>
		<ul id="outer" >
			<h2>Outer</h2>
			<div id="inner">
				<h2 id="child-head">Inner</h2>
				<div>A</div>
				<div>B</div>
				<div class="test">C</div>
				<div>D</div>
			</div>
		</ul>
	</div>
	<br>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Descendant Methods*/
		$(document).ready(function(){
			$('#inner').children('.test').css('background','red');
			//$('#main-outer').find('.test').css('background','red');
		});
	</script>
</body>
</html>