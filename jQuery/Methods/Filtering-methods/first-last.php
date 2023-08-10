<html lang="en">
<head>
	<title>Learn jquery</title>
	<style>
		body{ font-family: arial; }
		h1{ font-size: 25px; }
		#first{
			background: #ffeaa7;
			padding: 10px;
			border: 1px solid #000;
		}
		#second{
			background: #a29bfe;
			padding: 10px;
			border: 1px solid #6c5ce7;
		}
	</style>
</head>
<body>
	<h1>jQuery Filtering Methods</h1>
	<div id="first">
		<p>Lorem ipsum <span>dolor sit amet</span> consectetur adipisicing elit. Laborum nostrum voluptate delectus.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur mollitia nostrum modi earum qui, maxime.</p>
	</div>
	<br>
	<ul>
		<li>Orange</li>
		<li>Apple</li>
		<li>Banana</li>
		<li>Grapes</li>
	</ul>
	<div id="second">
		<p class="test">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, eaque eius! Exercitationem dolorum commodi ea! Debitis, quo illum eos ratione aliquam eveniet, praesentium architecto excepturi, molestias, est optio. Vitae, similique.</p>
		<p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus earum reprehenderit obcaecati ea, sapiente, cupiditate quod magnam porro officiis magni.</p>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery Filtering Method*/
		$(document).ready(function(){
			$('#second p').first().css('background','gold');

			//$('ul li').last().css('background','gold');

			//$('ul li').eq(2).css('background','gold');

			/* WithFilter*/
			//$('p').filter('.test').css('background','gold');

			/* WithOutFilter*/
			//$('p.test').css('background','gold');

			//$('p').not('.test').css('background','gold');

			//$('ul li').slice(2).css('background','gold');
		});
	</script>
</body>
</html>