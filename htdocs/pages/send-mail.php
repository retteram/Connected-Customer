<?php

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Send and Email</title>
		<script src="../libs/jquery-1.11.1.js"></script>

		<style>
			html {
				background-color: beige;

				font-family: Helvetica, Arial, sans-serif;
			}

			#send-mail {
				background-color: red;
				border: 4px solid white;
				border-radius: 4px;

				padding: 5px;
				height: 40px;
				width: 190px;

				position: absolute;
				top: 100px;
				left: calc(50% - 104px);
				color: white;

				font-size: 30px;
				font-weight: 600;
				text-align: center;
				vertical-align: middle;

				box-shadow: 0px 2px 6px gray;
			}

			#send-mail:hover {
				cursor: pointer;
			}

			#send-mail.done {
				background-color: green;
			}

			#response {
				height: 180px;
				width: 380px;
				padding: 10px;

				box-shadow: 0px 0px 6px gray inset;
				background-color: white;
				border: 2px solid gray;

				position: absolute;
				top: 200px;
				left: calc(50% - 202px);

				color: darkgray;
			}
		</style>
		<script>
			function sendMail() {
				var root = document.location.hostname;

				$.ajax({
					url: root+"/src/tools/mailer.php",
					context: document.body
				}).done(function() {
					$( this ).addClass( "done" );
				});
			}
		</script>
	</head>
	<body>
		<div id="send-mail" onclick="sendMail()">Send Mail</div>
		<div id="response">...response</div>
	</body>
</html>