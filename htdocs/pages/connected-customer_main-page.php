<!DOCTYPE html>
<html>
	<head>
		<title>Connected Customer</title>
		<?php require("page-pieces/imports.php"); ?>
		<style>
			#title{
				font-family:helvetica;
				font-weight:900;
				font-size: 60px !important; 
				color: #198A3E;
				text-align: center;
			}
		</style>
	</head>
	<body>

		<!-- Google Analytics -->
		<?php include("google-analytics.php"); ?>
		<!-- END GA -->

		<div data-role="page" id="home">

			<!-- BEGIN Header -->
			<?php require("page-pieces/header.php"); ?>
			<h1 id="title">HOW CAN WE HELP YOU?</h1>
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<!-- <?php // require("page-pieces/carousel-sub.php"); ?> -->
			<?php require("page-pieces/carousel.php"); ?>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			<?php require("page-pieces/footer-banner.php"); ?>
			<!-- END Footer -->
		</div>
	</body>
</html>


