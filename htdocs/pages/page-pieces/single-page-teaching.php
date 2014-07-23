<link href="../css/carousel-single-page.css" rel="stylesheet">
<script>
	/*$(function() {			
		$(".carousel").swipe({
		  swipe:function(event, direction, distance, duration, fingerCount) {

		  	if(direction == "right"){
		  		moveLeft2();
		  	} else if(direction == "left") {
		  		moveRight2();
		  	}
		  	// alert("You swiped " + direction);
		    // $(this).text("You swiped " + direction );
		  }
		});
	});*/
</script>
<div class="carousel">
	<div class="navigation-bar"><!-- 
		<div class="nav-container">
			<div class="nav-circle" name="page2"></div>
			<div class="nav-circle highlight" name="page1"></div>
		</div> -->
	</div>
	<div class="container-list">
		<div class="container" name="page1"><?php 
			$carouselpage = "../json/menu_item_teachingKids1.json";
			include("six-block-menu.php"); ?></div>
	</div>
	<!-- <div id="swipe-hand"> <img src="../assets/Swipe-Hand.png"></img> </div> -->
</div>
