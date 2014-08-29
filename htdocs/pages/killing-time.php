<!DOCTYPE html>
<html>
	<head>
		<title>Game</title>
		<?php require("page-pieces/imports.php"); ?>
		<script type="text/javascript" src="../js/killing-time.js"></script>
	</head>
	<body>

		<!-- Google Analytics -->
		<?php include("google-analytics.php"); ?>
		<!-- END GA -->

		<div data-role="page" id="home">

			<!-- BEGIN Header -->
			<?php require("page-pieces/header.php"); ?>
			<div class="headBox">
				<h1 id="title">KILLING TIME</h1>
			</div>
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<?php require("page-pieces/single-page.php"); ?>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			<?php require("page-pieces/footer-simple.php"); ?>
			<!-- END Footer -->
		</div>
	</body>
</html>