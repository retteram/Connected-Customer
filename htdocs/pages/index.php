<!DOCTYPE html>
<html>
	<head>
		<title>Mock-Up Demo</title>
		<link href="../css/howTo.css" rel="stylesheet">
		<?php require("page-pieces/imports.php"); ?>
		<script type="text/javascript" src="../js/creating-portfolio.js"></script>
		 	<script>
		 		function enter() {
					document.location.href=entering; 
				}
				var entering = "connected-customer_main-page.php";
			</script>

		<style>
			.body{
				margin:0 auto;
				width:1080px;
				background-color:;
			}

			.body div{
				width:95%;
				margin:0 auto;
				padding-top:2%;
			}

			#img1 img{
				width:100%;
			}

			#img2 img{
				width:100%;
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
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<a href="#" onclick="enter()">
				<div class="body">
					<div id="img1"><img src="../assets/splash1-o.png" /></div>
					<div id="img2"><img src="../assets/splash1.2-o.png" /></div>
				</div>
			</a>
			<!-- END Main Content -->
		</div>
	</body>
</html>


