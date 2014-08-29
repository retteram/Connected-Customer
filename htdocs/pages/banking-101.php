<!DOCTYPE html>
<html>
	<head>
		<title>Banking 101</title>
		<?php require("page-pieces/imports.php"); ?>
		<script type="text/javascript" src="../js/banking-101.js"></script>
	</head>
	<body>

		<!-- Google Analytics -->
		<?php include("google-analytics.php"); ?>
		<!-- END GA -->
	
		<div data-role="page" id="home">

			<!-- BEGIN Header -->
			<?php require("page-pieces/header.php"); ?>
			<div class="headBox">
				<h1 id="title">BANKING 101 FOR DUMMIES</h1>
			</div>
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<div class="body">
				<?php require("page-pieces/carousel-sub-Page.php"); ?>
			</div>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			<?php require("page-pieces/footer-simple.php"); ?>
			<!-- END Footer -->
		</div>
	</body>
</html>


