<!DOCTYPE html>
<html>
	<head>
		<title>Interesting Facts</title>
		<?php require("page-pieces/imports2.php"); ?>
		<script src="../js/interesting-facts.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="../css/interesting-joking.css" />
		<link href="../css/howTo.css" rel="stylesheet">
		<link rel="stylesheet" href="../libs/font-awesome-4.1.0/css/font-awesome.min.css">
		<style>

			input[type="checkbox"] {
			display:none;
			}

			input[type="checkbox"] + span:before {
			font-family: 'FontAwesome';
			padding-right: 3px;
			font-size: 30px;
			color:#BBBDC0;
			}

			input[type="checkbox"] + span:before {
			content: "\f096"; /* check-empty */
			font-size:font-size: 5em;
			}

			input[type="checkbox"]:checked + span:before {
			content: "\f046"; /* check */
			font-size:font-size: 5em;
			}


		</style>
	</head>

	<body>
		<div id="home" data-role="page">
			<?php require("page-pieces/header.php"); ?>
			<div class="headBox1">
			<h1 id="title">LOCAL ATTRACTIONS</h1>
			</div>


			<label for="history">
				Historic
  				<input type="checkbox" name="historic" id="history" value="local-1"/>
  				<span></span>
			</label>

			
			<?php require("page-pieces/footer-simple.php"); ?>
		</div>
	</body>
</html>