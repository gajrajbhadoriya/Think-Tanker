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
		width: 700px;
		height: 600px;
		margin: 0 auto;
	}
	#outer{
		border: 1px solid #ff9f43;
		background: #fdcb6e;
		padding: 10px 10px;
		width: 600px;
		height: 500px;
		margin: 0 auto;
	}
	#inner{
		border: 1px solid #f78fb3;
		background: #f8a5c2;
		padding: 10px 10px;
		width: 550px;
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
		margin: 0 13px 0 0;
	}
</style>
<body>
	<h1>jQuery Sibling Methods </h1>
	<div id="main-outer" style="position: relative;">
		<h2 class="test">Main Outer</h2>
		<ul id="outer" >
			<h2>Outer</h2>
			<div id="inner">
				<h2 id="child-head">Inner</h2>
				<div class="test">A</div>
				<div>B</div>
				<div id="child-C">C</div>
				<div>D</div>
				<div class="test">E</div>
			</div>
		</ul>
	</div>
	<br>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Sibling Methods*/
		$(document).ready(function(){
			$('#child-C').siblings().css('background','red');

			//$('#child-C').siblings('.test').css('background','red');

			//$('#child-C').next().css('background','red');

			//$('#child-C').prev().css('background','red');

			//$('#child-C').prevAll().css('background','red');

			//$('#child-C').nextAll().css('background','red');

			//$('#child-C').nextUntil('.test').css('background','red');

			//$('#child-C').prevUntil('.test').css('background','red');
		});
	</script>
</body>
</html>