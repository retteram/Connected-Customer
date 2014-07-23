<!DOCTYPE html>
<html>
	<head>
		<title>Game</title>
		<?php require("page-pieces/imports.php"); ?>
		<script type="text/javascript" src="../js/game-page.js"></script>
		<link href="../css/howTo.css" rel="stylesheet">
		<script>var backlink = "connected-customer_main-page.php";</script>
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
			<img src="../assets/gameScreen.png" />
			</div>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			<div class="related-container">
				<div class="related-object">
					<h1 id="relatedTitle">MORE GAMES</h1>
					<div class="object1">
					<img src="../assets/related1.png" />
					<h2 id="objectTitle">TIC TAC TOE</h2>
					</div>
					<div class="object2">
					<img src="../assets/related2.png" />
					<h2 id="objectTitle">FINANCIAL MOUNTAIN CLIMBING</h2>	
					</div>
					<div class="object3">
					<img src="../assets/related3.png" />
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