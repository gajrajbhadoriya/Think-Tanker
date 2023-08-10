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
	</style>
</head>
<body>
	<h1>jQuery has() & is() Method</h1>
	<div id="first">
		<p>Lorem ipsum dolor sit amet <b>consectetur adipisicing elit</b>. Laborum nostrum voluptate delectus.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur mollitia nostrum modi earum qui, maxime.</p>
	</div>
	<br>
	<ul>
		<li>Orange</li>
		<li><span>Apple</span></li>
		<li>Banana</li>
		<li>Grapes</li>
	</ul>
	<p class="test">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deserunt, eaque eius! Exercitationem dolorum commodi ea! Debitis, quo illum eos ratione aliquam eveniet, praesentium architecto excepturi, molestias, est optio. Vitae, similique.</p>
	<p>Lorem ipsum dolor sit amet, <span class="test">consectetur, adipisicing</span> elit. Repellendus earum reprehenderit obcaecati ea, sapiente, cupiditate quod magnam porro officiis magni.</p>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		/* jQuery has() & is() Method*/
		$(document).ready(function(){
			$('p').has('b,span').css('background','gold');

			//$('p').has('.test').css('background','gold');

			/*if($('p').parent().is('div')){
				console.log($('p').parent().is('div'));
			}*/

			/*$('p').click(function(){
				if($(this).parent().is('div')){
				$(this).css('background','gold');	
				}
			});*/
		});
	</script>
</body>
</html>