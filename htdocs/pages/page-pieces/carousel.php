<link href="../css/carousel.css" rel="stylesheet">
<link href="../css/iscroll.css" rel="stylesheet">
<script type="text/javascript" src="../../src/iscroll.js"></script>
<script type="text/javascript">
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

		var num_pages = $('#container-list > li').length;
		$('#scroller').css('width', num_pages+"px");
	}
	document.addEventListener('DOMContentLoaded', loaded, false);
</script>

<?php $num_page = 2; ?>
<div id="nav">
	<ul id="indicator">
		<li class="active">1</li>
		<?php for($i = 2; $i < $num_page+1; $i++){ ?>
			<li>echo $i</li>
		<?php } ?>
	</ul>
</div>

<div id="wrapper">
	<div id="scroller">
		<ul id="container-list">
			<?php require("page-pieces/carousel-pages/main-pages"); ?>
		</ul>
	</div>
</div>


<!--
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
	<div id="swipe-hand"> <img src="../assets/Swipe-Hand.png"></img> </div>
</div>
-->
