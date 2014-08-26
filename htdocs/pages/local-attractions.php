<!DOCTYPE html>
<html>
	<head>
		<title>Local Attractions</title>
		<?php require("page-pieces/imports.php"); ?>
		<!-- <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" /> -->
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script> -->
		<script src="../js/interesting-facts.js" type="text/javascript"></script>

		<script type="text/javascript" src="../libs/iscroll-4/src/iscroll.js"></script>
		<script type="text/javascript" src="../js/local-attractions.js"></script>

		<link rel="stylesheet" type="text/css" href="../css/interesting-joking.css" />
		<link href="../css/howTo.css" rel="stylesheet">
		<link rel="stylesheet" href="../libs/font-awesome-4.1.0/css/font-awesome.min.css">
		<style>
			input[type="checkbox"] {
				display:none;
			}

			input[type="checkbox"] + span:before {
				font-family: 'FontAwesome';
				/*font-size: 70px;*/
				font-size:35px;
				color:white;
				/*padding-left:4px;*/
				padding-left:2px;
				/*line-height:110px;*/
				line-height:55px;
			}

			input[type="checkbox"] + span:before {
				content: "\f096"; /* check-empty */
				font-size:font-size: 5em;
			}

			input[type="checkbox"]:checked + span:before {
				content: "\f046"; /* check */
				font-size:font-size: 5em;
				color:white;
			}

			#local-attractions{
				margin:30px auto 0px auto;
				width:1080px;
				height:50px;
				background-color:;
				text-align:center;
			}

			#local-attractions div{
				float:left;
				width:33%;
				background-color:;
			}

			#attraction1{
				background-color:#9ad6ec;
			}
			#attraction2{
				background-color:#a7a9ab;
			}
			#attraction3{
				background-color:#25b4cb;
			}
			#attraction4{
				background-color:#ee3d3b;
			}
			#attraction5{
				background-color:#449f7e;
			}
			#attraction6{
				background-color:#302541;
			}

			#local-attractions h1{
				margin:20px auto 20px 60px;
				float:left;
				font-family:helvetica;
				font-weight:900;
				/*font-size:30px;*/
				font-size:15px;
				color:white;
				
			}

			#line {
				background-color:;
				width:100%;
				height:;
				margin-top:100px;
				border-bottom:dotted 3px #D1D2D4;
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
		  				<input type="checkbox" name="all" id="all" value="local-1" onchange="allClicked()"/>
		  				<span></span>
					</label>
				</div>

				<div id="attraction2">
					<label for="history">
						<h1>HISTORIC</h1>
		  				<input type="checkbox" name="historic" id="history" value="local-2" onchange="historyClicked()"/>
		  				<span></span>
					</label>
				</div>

				<div id="attraction3">
					<label for="dining">
						<h1>DINING</h1>
		  				<input type="checkbox" name="dining" id="dining" value="local-3" onchange="diningClicked()"/>
		  				<span></span>
					</label>
				</div>

				<div id="attraction4">
					<label for="entertainment">
						<h1>ENTERTAINMENT</h1>
		  				<input type="checkbox" name="entertainment" id="entertainment" value="local-4" onchange="entertainmentClicked()"/>
		  				<span></span>
					</label>
				</div>

				<div id="attraction5">
					<label for="nature">
						<h1>NATURE</h1>
		  				<input type="checkbox" name="nature" id="nature" value="local-5" onchange="natureClicked()"/>
		  				<span></span>
					</label>
				</div>

				<div id="attraction6">
					<label for="shopping">
						<h1>SHOPPING</h1>
		  				<input type="checkbox" name="shopping" id="shopping" value="local-6" onchange="shoppingClicked()"/>
		  				<span></span>
					</label>
				</div>

			</div>
			<div id="line"></div>
			<!-- End local Attractions and Dividing line -->

			<?php require("page-pieces/attraction-list.php"); ?>

			<?php require("page-pieces/footer-simple.php"); ?>
		</div>
	</body>
</html>
