<?php #script for website - Home Page
$pageTitle = "Tuff Henson Compositions - Compositions";
include("header.html");
#Code Goes Here
?>
			<div class='slider'>
				<div class = "slide-view">
					<div class = 'group'>
						<div id = "one" class =  'slide current1' title='Here&#39s the stuff'>
							<a href = "imgs/Invention1FINAL.pdf"><img src = "imgs/Invention1.png"></a> </div>
						<div id = "two" class = 'slide current2' title="Here's the stuff">
							<a href = "imgs/ASongOfJoyFINAL.pdf"><img src = "imgs/ASongOfJoy.png"></a> </div>
						<div id = 'three' class = 'slide current3' title="Here's the stuff">
							<a href = "imgs/Invention1FINAL.pdf"><img src = "imgs/Invention1.png"></a> </div>
						<div id = 'four' class = 'slide' title="Here's the stuff">
							<a href = "imgs/PianoSketch3.pdf"><img src = "imgs/PianoSketch3.png"></a></div>
						<div id = 'five' class = 'slide' title="Here's the stuff">
							<a href = "imgs/ASongOfJoyFINAL.pdf"><img src = "imgs/ASongOfJoy.png"></a> </div>
					</div>
				</div>
				<div class = "button">
					<button type="button" class = "slide-btnL">&bull;</button>
					<button type="button" class = "slide-btnR">&bull;</button>
				</div>
			</div>
			<div class = "post">
				<a href = "imgs/Invention1FINAL.pdf"><img src = "imgs/Invention1.png"></a>
				<h2>Invention 1</h2>
				<p>This is an invention, or a contrapunctal work for two instruments, in this case bari and soprano saxophones.</p>
				<a href = "imgs/Invention1Final.pdf">You can download it here.</a>
			</div>
			<div class = "post">
				<a href = "imgs/ASongOfJoyFINAL.pdf"><img src = "imgs/ASongOfJoy.png"></a>
				<h2>A Song Of Joy</h2>
				<p>This is a work made for a friend's wedding. It is a quintet written for a traditional string quartet with a guitar.</p>
				<a href = "imgs/ASongOfJoyFINAL.pdf">You can download it here.</a>
			</div>
<?php
#Code Stops Here
include("sidebar.html");
include("footer.html");
?>