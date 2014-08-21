<link href="../css/carousel-sub-page.css" rel="stylesheet">
<script>
	$(function() {			
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
	});
</script>
<div class="carousel">
<div class="navigation-bar">
				<div class="nav-circle" name="page2"></div>
				<div class="nav-circle highlight" name="page1"></div>
		</div>
	<div class="background">
		
		<div class="container-list">
			<br>
			<div class="container" name="page2"><?php 
				$carouselpage = "../json/banking-101/menu_item_banking101_page2.json";
				include("six-block-menu.php"); ?></div>
			<div class="container" name="page1"><?php 
				$carouselpage = "../json/banking-101/menu_item_banking101_page1.json";
				include("six-block-menu.php"); ?></div>
		</div>
	</div>
	<!-- <div id="swipe-hand"> <img src="../assets/Swipe-Hand.png"></img> </div> -->
</div>
