<?php #script for website - Home Page
$pageTitle = "Tuff Henson Compositions - Archive";
include("header.html");
#Code Goes Here
?>
			<ul class = "accordion">
				<li>
					<button class = "accordion-btn" value = "one">Compositions</button>
					<div class = "accordion-panel one open">
						<img src = "imgs/TuffHensonWithAGroup.jpg" />
						<p>This is my main area of focus. You can see various compositions that I have written.</p>
						<a href = "compositions.html">Click here to see it!</a>
					</div>
				</li>
				<li>
					<button class = "accordion-btn"value="two">Guitar</button>
					<div class = "accordion-panel two">
						<img src = "imgs/MeJammin.jpg" />
						<p>Here you can find recordings of guitar pieces that I have performed.</p>
						<a href = "guitar.html">Click here to see it!</a>
					</div>
				</li>
				<li>
					<button class = "accordion-btn" value="three">Tutorials</button>
					<div class = "accordion-panel three">
						<img src = "imgs/TuffHensonUpClose.jpg" />
						<p>If you need a quick guitar lesson or want to learn more about 
						music theory, this is the place!</p>
						<a href = "tutorials.html">Click here to see it!</a>
					</div>
				</li>
			</ul>
			<script src="js/jquery-1.11.1.js"></script>
			<script src="js/accordion.js"></script>
<?php
#Code Stops Here
include("sidebar.html");
include("footer.html");
?>