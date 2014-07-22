<link href="../css/howTo.css" rel="stylesheet">
<script>
	$(function() {			
		$(".carousel").swipe({
		  swipe:function(event, direction, distance, duration, fingerCount) {

		  	if(direction == "right"){
		  		moveLeft3();
		  	} else if(direction == "left") {
		  		moveRight3();
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
			<div class="nav-number" name="page4"><div class="num">4</div></div>
			<div class="nav-number" name="page3"><div class="num">3</div></div>
			<div class="nav-number" name="page2"><div class="num">2</div></div>
			<div class="nav-number highlight" name="page1"><div class="num">1</div></div>
		</div>
	</div>
	<div class="container-list">
		<br>
		<div class="container" name="page4"><?php
			$carouselpage = "../json/menu_item_banking101_page4.json";
			include("six-block-menu.php"); ?></div>
		<div class="container" name="page3"><?php
			$carouselpage = "../json/menu_item_banking101_page3.json";
			include("six-block-menu.php"); ?></div>
		<div class="container" name="page2"><?php 
			$carouselpage = "../json/menu_item_banking101_page2.json";
			include("six-block-menu.php"); ?></div>
		<div class="container" name="page1"><?php 
			$carouselpage = "../json/menu_item_banking101_page1.json";
			include("six-block-menu.php"); ?></div>
	</div>
	<!-- <div id="swipe-hand"> <img src="../assets/Swipe-Hand.png"></img> </div> -->
</div>
