<link href="../css/carousel.css" rel="stylesheet">
<script>
	$(function() {			
		$(".carousel").swipe({
		  swipe:function(event, direction, distance, duration, fingerCount) {

		  	if(direction == "right"){
		  		moveLeft();
		  	} else if(direction == "left") {
		  		moveRight();
		  	}
		  	// alert("You swiped " + direction);
		    // $(this).text("You swiped " + direction );
		  }
		});
	});
</script>
<div class="carousel">
	<div class="navigation-bar">
		<div class="nav-container">
			<div class="nav-circle" name="page5"></div>
			<div class="nav-circle" name="page4"></div>
			<div class="nav-circle" name="page3"></div>
			<div class="nav-circle" name="page2"></div>
			<div class="nav-circle highlight" name="page1"></div>
		</div>
	</div>
	<div class="container-list">
		<br>
		<div class="container" name="page5">
			<?php $carouselpage = 5; 
				include("six-block-menu.php"); ?></div>
		<div class="container" name="page4">
			<?php $carouselpage = 4; 
				include("six-block-menu.php"); ?></div>
		<div class="container" name="page3">
			<?php $carouselpage = 3;
				include("six-block-menu.php"); ?></div>
		<div class="container" name="page2">
			<?php $carouselpage = 2;
				include("six-block-menu.php"); ?></div>
		<div class="container" name="page1">
			<?php $carouselpage = 1;
				include("six-block-menu.php"); ?></div>
	</div>
	<!-- <div id="swipe-hand"> <img src="../assets/Swipe-Hand.png"></img> </div> -->
</div>
