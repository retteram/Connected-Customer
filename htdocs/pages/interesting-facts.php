<!DOCTYPE html>
<html>
	<head>
		<title>Interesting Facts</title>
		<?php require("page-pieces/imports.php"); ?>
		<script src="../js/interesting-facts.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../css/interesting-joking.css" />
		<link href="../css/howTo.css" rel="stylesheet">
		<link href="../css/related-section.css" rel="stylesheet">

		<script> 
			$(function() {
				generateRand();
			});

			function goToGames() {
				document.location.href="game-page.php";
			}

			function goToJokes() {
				document.location.href="jokes.php";
			}

			function goToLocalAttractions() {
				document.location.href="local-attractions.php";
			}
		</script>
		
	</head>

	<body>

		<!-- Google Analytics -->
		<?php include("google-analytics.php"); ?>
		<!-- END GA -->
	
		<div id="home" data-role="page">
			<?php require("page-pieces/header.php"); ?>
			<div class="headBox1">
				<h1 id="title">INTERESTING FACTS</h1>
			</div>

			<?php require("page-pieces/display-fact.php"); ?>

			<div class="related-container">
				<div class="related-object">
					<h1 id="relatedTitle">RELATED TIME KILLERS</h1>
					<a href="#" onClick="goToGames()">
						<div class="object1">
							<img src="../assets/related8-o.png" />
							<h2 id="objectTitle">GAMES</h2>
						</div>
					</a>

					<a href="#" onClick="goToJokes()">
						<div class="object2">
							<img src="../assets/jokes-o.png" />
							<h2 id="objectTitle">JOKES</h2>	
						</div>
					</a>

					<a href="#" onClick="goToLocalAttractions()">
						<div class="object3">
							<img src="../assets/related5-o.png" />
							<h2 id="objectTitle">LOCAL ATTRACTIONS</h2>
						</div>
					</a>
				</div>
			</div>

			<?php require("page-pieces/footer-simple.php"); ?>
		</div>
	</body>
</html>