<!DOCTYPE html>
<html>
	<head>
		<title>Mock-Up Demo</title>
		<link rel="stylesheet" type="text/css" href="../css/main_page.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="../libs/TouchSwipe-Jquery-Plugin-master/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="../js/main_page.js"></script>
	</head>
	<body>

		
		<div data-role="page" id="home">

			<!-- BEGIN Header -->
			<div id="header">
				<div class="title-bar">
					<div class="title-bar-wrapper">
						<div id="placeholder"></div>
						<h1 id="title">WHY ARE YOU HERE?</h1>
						<span class="menu-bars" onclick="menu_button()">
							<div class="white-line"></div>
							<div class="white-line"></div>
							<div class="white-line"></div>
							<!-- <img src="../assets/menu-bars-2.png" width="100%"/> -->
						</span>
					</div>
				</div>
				<div class="nav-dropdown">
					<ul>
						<li>Option A&nbsp</li>
						<li>Option B&nbsp</li>
						<li>Option C&nbsp</li>
						<li>Option D&nbsp</li>
					</ul>
				</div>
			</div>
			<!-- END Header -->


			<!-- BEGIN Main Content -->
			<?php include("carousel.php"); ?>
			<!-- END Main Content -->


			<!-- BEGIN Footer -->
			<div id="footer"></div>
			<!-- END Footer -->
		</div>
	</body>
</html>


