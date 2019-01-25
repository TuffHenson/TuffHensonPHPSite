<?php #script for website - Home Page
$pageTitle = "Tuff Henson Compositions";
include("header.html");
#Code Goes Here
?>
<div id="selector">
	<div class="primeImg"></div>
		<div class = "thumbs">
			<a class="active" href = "imgs/MeJammin.jpg" title = "Playing a private venue">
				<img src = "imgs/MeJammin.jpg" /></a>
			<a href = "imgs/TuffHensonUpClose.jpg" title = "Tuff Henson">
				<img src = "imgs/TuffHensonUpClose.jpg" /></a>
			<a href = "imgs/TuffHensonWithAGroup.jpg" title = "With Friends">
				<img src = "imgs/TuffHensonWithAGroup.jpg" /></a>
		</div>
	</div>
	<script src="js/jquery-1.11.1.js"></script>
	<script src="js/photoSelect.js"></script>
	<h2>Welcome!</h2>
	<div class="bodp">
		<p>Hello! My name is Tuff Henson. 
		I am a music composer and classical guitarist.
		If you are interested in learning more about me and what I do,
		click <a href = "about.html">Here</a>.</p>
				
		<p>You can see some of my work on the guitar <a href = "guitar.html">Here</a>.</p>
		<p>Samples of my compositions are also available <a href = "compositions.html">here</a>
	</div>
<?php
#Code Stops Here
include("sidebar.html");
include("footer.html");
?>