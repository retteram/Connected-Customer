<!DOCTYPE html>
<html>
	<head>
		<title>Game</title>
		<?php require("page-pieces/imports.php"); ?>
		<link href="../css/howTo.css" rel="stylesheet">
		<link href="../css/related-section.css" rel="stylesheet">
		<script>
			function enterGames() {
				document.location.href="game-page.php"; 
			}
		</script>

		<style>
			iframe{
				margin:70px 70px 70px 80px;
				border:3px solid #ee3d3b;
				background-color:white;
				border-radius:6px;
			}

			#ttt {
				background-color:;
				width:900px;
				height:900px;
				margin:0 auto;
			}

			.related-object div:hover{
				cursor:pointer;
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
			<div class="headBox2">
				<h1 id="title">TIC TAC TOE</h1>
			</div>
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<div class="game-container">
				<div id="game">
					<div id="ttt">
						<iframe src="page-pieces/ttt.html" width="720" height="720"></iframe>
					</div>
				</div>
			</div>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			<div class="related-container">
				<div class="related-object">
					<h1 id="relatedTitle">MORE GAMES</h1>

					<a href="#" onclick="enterGames()">
						<div class="object1">
							<img src="../assets/flyingPigGame-o.png" />
							<h2 id="objectTitle">CHANGE CATCH</h2>
						</div>
					</a>

					<div class="object2">
						<img src="../assets/mountain-o.png" />
						<h2 id="objectTitle">FINANCIAL MOUNTAIN CLIMBING</h2>	
					</div>

					<div class="object3">
						<img src="../assets/pigSplosion-o.png" />
						<h2 id="objectTitle">PIG BANK EXPLOSION</h2>
					</div>
				</div>
			</div>
			<?php require("page-pieces/footer-simple.php"); ?>
			<!-- END Footer -->
		</div>
	</body>
</html>