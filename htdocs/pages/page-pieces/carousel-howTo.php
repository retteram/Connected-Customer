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
		<div class="container" name="page4">
			<img src="../assets/portfolioStep-4.png" />
		</div>
		<div class="container" name="page3">
			<img src="../assets/portfolioStep-3.png" />
		</div>
		<div class="container" name="page2">
			<img src="../assets/portfolioStep-2.png" />
		</div>
		<div class="container" name="page1">
			<img src="../assets/portfolioStep-1.png" />
		</div>
	</div>
	<!-- <div id="swipe-hand"> <img src="../assets/Swipe-Hand.png"></img> </div> -->
</div>
