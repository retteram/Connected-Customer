<!DOCTYPE html>
<html>
	<head>
		<title>Game</title>
		<?php require("page-pieces/imports.php"); ?>
		<script type="text/javascript" src="../js/killing-time.js"></script>
		<style>
			.related-container{
	width:100%;
	height:500px;
	background-color:;
	bottom:100px;
	position:absolute;
	border-top:dotted 5px;
	border-color:#37a85c;
}

.related-object{
	width:1080px;
	height:500px;
	background-color:;
	position:absolute;
	margin-left:50px;
	float:left;
}

#relatedTitle {
	font-family:helvetica;
	font-weight:100;
	font-size:30px !important;
	color:#37a85c;
	margin:0 auto;
	margin-top:50px;
}

.related-object div{
	float:left;
	width:192px;
	background-color:;
	margin:0 auto;
	text-align:center;
	margin-top:60px;
	margin-left:130px;
}

.related-object img{
	width:192px;
	height:162px;
}

.related-object h2{
	font-family:helvetica;
	font-weight:600;
	font-size:20px !important;
	color:#37a85c;
}
		</style>
	</head>
	<body>
		<div data-role="page" id="home">

			<!-- BEGIN Header -->
			<?php require("page-pieces/header.php"); ?>
			<div class="headBox1">
			<h1 id="title">TEACHING CHILDREN<br>HOW TO SAVE</h1>
			</div>
			<!-- END Header -->

			<!-- BEGIN Main Content -->
			<?php require("page-pieces/single-page-teaching.php"); ?>
			<!-- END Main Content -->

			<!-- BEGIN Footer -->
			<div class="related-container">
				<div class="related-object">
					<h1 id="relatedTitle">RELATED PRODUCTS & SERVICES</h1>
					<div class="object1">
					<img src="../assets/related1.png" />
					<h2 id="objectTitle">TEACH KIDS <br> ABOUT CREDIT</h2>
					</div>
					<div class="object2">
					<img src="../assets/related2.png" />
					<h2 id="objectTitle">529 COLLEGE<br>SAVINGS PLAN</h2>	
					</div>
					<div class="object3">
					<img src="../assets/related3.png" />
					<h2 id="objectTitle">NEED vs. WANT<br>BUDGET APP</h2>
					</div>
				</div>
			</div>
			<?php require("page-pieces/footer-simple.php"); ?>
			<!-- END Footer -->
		</div>
	</body>
</html>