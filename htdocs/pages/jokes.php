<!DOCTYPE html>
<html>
	<head>
		<title>Random Jokes</title>
		<?php require("page-pieces/imports.php"); ?>
		<script src="../js/interesting-facts.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../css/interesting-joking.css" />
		<link href="../css/howTo.css" rel="stylesheet">
		<link href="../css/related-section.css" rel="stylesheet">
		<script> 
			$(function() {
				generateRand();
			});
		</script>
	</head>

	<body>

		<!-- Google Analytics -->
		<?php include("google-analytics.php"); ?>
		<!-- END GA -->
	
		<div id="home" data-role="page">
			<?php require("page-pieces/header.php"); ?>
			<div class="headBox1">
			<h1 id="title">RANDOM JOKES</h1>
			</div>

			
			<?php require("page-pieces/display-joke.php"); ?>



			<div class="related-container">
				<div class="related-object">
					<h1 id="relatedTitle">RELATED TIME KILLERS</h1>
					<div class="object1">
					<img src="../assets/ttt-o.png" />
					<h2 id="objectTitle">GAMES</h2>
					</div>
					<div class="object2">
					<img src="../assets/mountain-o.png" />
					<h2 id="objectTitle">RANDOM FACTS</h2>	
					</div>
					<div class="object3">
					<img src="../assets/pigSplosion-o.png" />
					<h2 id="objectTitle">LOCAL ATTRACTIONS</h2>
					</div>
				</div>
			</div>
			<?php require("page-pieces/footer-simple.php"); ?>
		</div>
	</body>
</html>