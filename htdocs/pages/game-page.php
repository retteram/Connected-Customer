<!DOCTYPE html>
<html>
	<head>
		<title>Game</title>
		<?php require("page-pieces/imports.php"); ?>
		<link href="../css/howTo.css" rel="stylesheet">
		<link href="../css/related-section.css" rel="stylesheet">
		<script>var backlink = "connected-customer_main-page.php";</script>

		<style>

		</style>
	</head>
	<body>
		<div data-role="page" id="home">

			<!-- BEGIN Header -->
			<?php require("page-pieces/header.php"); ?>
			<div class="headBox2">
			<h1 id="title">GAMES</h1>
			</div>
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<div class="game-container">
			<div id="game"><img src="../assets/gameScreen.png" /></div>
			</div>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			<div class="related-container">
				<div class="related-object">
					<h1 id="relatedTitle">MORE GAMES</h1>
					<div class="object1">
					<img src="../assets/ttt.png" />
					<h2 id="objectTitle">TIC TAC TOE</h2>
					</div>
					<div class="object2">
					<img src="../assets/mountain.png" />
					<h2 id="objectTitle">FINANCIAL MOUNTAIN CLIMBING</h2>	
					</div>
					<div class="object3">
					<img src="../assets/pigSplosion.png" />
					<h2 id="objectTitle">PIG BANK EXPLOSION</h2>
					</div>
				</div>
			</div>
			<?php require("page-pieces/footer-simple.php"); ?>
			<!-- END Footer -->
			<!-- END Footer -->
		</div>
	</body>
</html>