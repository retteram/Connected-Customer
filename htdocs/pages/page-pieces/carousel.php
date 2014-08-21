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

	var myScroll;
	function loaded() {
		myScroll = new iScroll('wrapper', {
			snap: true,
			momentum: false,
			hScrollbar: false,
			onScrollEnd: function () {
				document.querySelector('#indicator > li.active').className = '';
				document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
			}
		});

		var pages = document.getElementsByClassName('container');
		for(var i = 1; i < pages.length+1; i++){
			var navitem = document.createElement("li");
			navitem.innerHTML = i.toString();
			if(i == 1){
				navitem.className = "active";
			}
			document.getElementById('indicator').appendChild(navitem);
		}
	}
	document.addEventListener('DOMContentLoaded', loaded, false);
</script>
<div class="carousel">
<div class="background">
	<div id="nav">
		<!-- <div id="prev" onclick="myScroll.scrollToPage('prev', 0);return false">&larr; prev</div> -->
		<ul id="indicator">
		</ul>
		<!-- <div id="next" onclick="myScroll.scrollToPage('next', 0);return false">next &rarr;</div> -->
	</div>
		<div id="wrapper">
			<div id="scroller">
				<ul class="container-list">
					<?php require("carousel-pages/main-pages.php"); ?>
				</ul>
			</div>
		</div>
</div>
	<!--
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
		<div class="container" name="page5"><?php 
			// $carouselpage = "../json/main-page/menu_item_page5.json";
			// include("six-block-menu.php"); ?></div>
		<div class="container" name="page4"><?php 
			// $carouselpage = "../json/main-page/menu_item_page4.json";
			// include("six-block-menu.php"); ?></div>
		<div class="container" name="page3"><?php
			// $carouselpage = "../json/main-page/menu_item_page3.json";
			// include("six-block-menu.php"); ?></div>
		<div class="container" name="page2"><?php 
			// $carouselpage = "../json/main-page/menu_item_page2.json";
			// include("six-block-menu.php"); ?></div>
		<div class="container" name="page1"><?php 
			// $carouselpage = "../json/main-page/menu_item_page1.json";
			// include("six-block-menu.php"); ?></div>
	</div>
	-->
	<!-- <div id="swipe-hand"> <img src="../assets/Swipe-Hand.png"></img> </div> -->
</div>
