<!DOCTYPE html>
<html>
	<head>
		<title>Mock-Up Demo</title>
		<link href="../css/howTo.css" rel="stylesheet">
		<link href="../css/related-section.css" rel="stylesheet">
		<?php require("page-pieces/imports.php"); ?>
		<script type="text/javascript" src="../js/creating-portfolio.js"></script>
		<script>
			var entering = "529-savings.php";
			function enter529() {
				document.location.href=entering; 
			}
		</script>
	</head>
	<body>

		<!-- Google Analytics -->
		<?php include("google-analytics.php"); ?>
		<!-- END GA -->

		<div data-role="page" id="home">
			<!-- BEGIN Header -->
			<?php require("page-pieces/header.php"); ?>
			<div class="headBox2">
				<h1 id="title">CREATING A PORTFOLIO <br> & BEATING THE MARKET</h1>
			</div>
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<div class="body">
				<?php require("page-pieces/carousel-howTo.php"); ?>
			</div>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			<div class="related-container">
				<div class="related-object">
					<h1 id="relatedTitle2">RELATED PRODUCTS & SERVICES</h1>
					<div class="object1">
						<img src="../assets/related1-o.png" />
						<h2 id="objectTitle">TEACH KIDS <br> ABOUT CREDIT</h2>
					</div>
					<a href="#" onclick="enter529()">
						<div class="object2">
							<img src="../assets/related2-o.png" />
							<h2 id="objectTitle">529 COLLEGE<br>SAVINGS PLAN</h2>	
						</div>
					</a>
					<div class="object3">
						<img src="../assets/related3-o.png" />
						<h2 id="objectTitle">NEED vs. WANT<br>BUDGET APP</h2>
					</div>
				</div>
			</div>
			<?php require("page-pieces/footer-simple.php"); ?>
			<!-- END Footer -->
		</div>
	</body>
</html>


