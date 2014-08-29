<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Random Fact Generator</title>
		<style>
			#output{
				background-color:red;
				width:500px;
				height:500px;
				color:white;
			}

			#output1{
				padding-top:200px;
			}
		</style>
	</head>
	<body>

		<!-- Google Analytics -->
		<?php include("google-analytics.php"); ?>
		<!-- END GA -->

		<center>
			<a href=http://goo.gl/nTr9cQ>This Random Fact program is sponsored by <strong>free rewards!</strong> :)</a><br>
			<script type="text/javascript">
				document.write("<br>")

				function onClick() {
					function generateRandomFact(first, last) {
						return Math.floor(Math.random() * (last - first + 1)) + first;
					}

					randomfactno = generateRandomFact(1, 10)
					var outputstring = "";

					if (randomfactno == 1) {
						outputstring = "Dragonflies can't walk, despite having legs.";
					}
					else if (randomfactno == 2) {
						outputstring = "The chewing sounds from Bugs Bunny were made by chewing real carrots.";
					}
					else if (randomfactno == 3) {
						outputstring = "Yelling for 8 and a half years creates enough energy to heat 1 coffee cup.";
					}
					else if (randomfactno == 4) {
						outputstring = "Sign language speakers can speak in their sleep using sign language.";
					}
					else if (randomfactno == 5) {
						outputstring = "4 bits = 1 nibble.";
					}
					else if (randomfactno == 6) {
						outputstring = "German chocolate cake was made by an American.";
					}
					else if (randomfactno == 7) {
						outputstring = "Silver is predicted to run out by 2020, due to industrial use.";
					}
					else if (randomfactno == 8) {
						outputstring = "The first Youtube video was of Jawed Karim talking about elephants.";
					}
					else if (randomfactno == 9) {
						outputstring = "The Golden Gate Bridge's color is International Orange.";
					}
					else if (randomfactno == 10) {
						outputstring = "August 26th is International Dog Day.";
					}
					else {
						outputstring = "Javascript Error.";;
					}

					var element = document.getElementById("output1");
					element.innerHTML = outputstring;
				}
			</script>
			<button onclick="onClick()">Generate Random Fact!</button>

			<div id="output">
				<div id="output1"></div>
			</div>
		</center>
	</body>
</html>