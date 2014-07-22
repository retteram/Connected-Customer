<!DOCTYPE html>
<html>
	<head>
		<title>Mock-Up Demo</title>
		<link rel="stylesheet" type="text/css" href="../css/main_page.css" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.js"></script>
		<script type="text/javascript" src="../libs/TouchSwipe-Jquery-Plugin-master/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="../js/main_page.js"></script>
	</head>

	<style>

	

	</style>

	<body>
		<div data-role="page" id="home">

			<!-- BEGIN Header -->
			<?php require("header.php"); ?>
			<div class="headBox">
			<h1 id="title">BANKING 101 FOR DUMMIES</h1>
			</div>
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<div class="body">
			<?php require("carousel-sub-Page.php"); ?>
			</div>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			<?php require("footer.php"); ?>
			<!-- END Footer -->
		</div>
	</body>
</html>


