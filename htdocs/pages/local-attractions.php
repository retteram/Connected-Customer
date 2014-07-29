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
			font-size: 70px;
			color:#BBBDC0;
			padding-left:4px;
			line-height:110px;
			}

			input[type="checkbox"] + span:before {
			content: "\f096"; /* check-empty */
			font-size:font-size: 5em;
			}

			input[type="checkbox"]:checked + span:before  {
			content: "\f046"; /* check */
			font-size:font-size: 5em;
			}

		
			#local-attractions{
				margin:50px auto 0px auto;
				width:1080px;
				height:50px;
				background-color:;
				text-align:center;
			}

			#local-attractions div{
				float:left;
				margin-right:20px;
				margin-left:20px;

			}

			#local-attractions h1{
				float:left;
				font-family:helvetica;
				font-weight:900;
				font-size:30px;
				color:white;
				background-color:#37a85c;
				padding:15px;
				border-radius:6px;
			}

			
		</style>
	</head>

	<body>
		<div id="home" data-role="page">
			<?php require("page-pieces/header.php"); ?>
			<div class="headBox1">
			<h1 id="title">LOCAL ATTRACTIONS</h1>
			</div>

			<div id="local-attractions">

			<div id="attraction1">
			<label for="all">
				<h1>ALL ATTRACTIONS</h1>
  				<input type="checkbox" name="all" id="all" value="local-1"/>
  				<span></span>
			</label>
			</div>

			<div id="attraction2">
			<label for="history">
				
  				<input type="checkbox" name="historic" id="history" value="local-2"/>
  				<span><h1>HISTORIC</h1></span>
			</label>
			</div>

			<div id="attraction3">
			<label for="shopping">
				<h1>DINNING</h1>
  				<input type="checkbox" name="shopping" id="shopping" value="local-3"/>
  				<span></span>
			</label>
			</div>

			<div id="attraction5">
			<label for="entertainment">
				<h1>ENTERTAINMENT</h1>
  				<input type="checkbox" name="entertainment" id="entertainment" value="local-5"/>
  				<span></span>
			</label>
			</div>


			<div id="attraction4">
			<label for="nature">
				<h1>NATURE</h1>
  				<input type="checkbox" name="nature" id="nature" value="local-4"/>
  				<span></span>
			</label>
			</div>

			

			<div id="attraction6">
			<label for="food">
				<h1>SHOPPING</h1>
  				<input type="checkbox" name="dinning" id="food" value="local-6"/>
  				<span></span>
			</label>
			</div>


			</div>

			<?php require("page-pieces/footer-simple.php"); ?>
		</div>
	</body>
</html>