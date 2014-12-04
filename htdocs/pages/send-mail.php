<!DOCTYPE html>
<html>
	<head>
		<title>Send Email</title>
		<?php require("page-pieces/imports.php"); ?>
		<link href="../css/related-section.css" rel="stylesheet">
		<link href="../css/howTo.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/interesting-joking.css" />
		<style>

			.clicked{
				background-color:rgba(0,0,0, .7);
				height:100%;
				width:100%;
				position:absolute;
				left:0;
				top:0;
				z-index:5;
				display:none;
				opacity:0;
				
			}

			.clicked.show {
				display:block;
				opacity:1;
			}

			.clicked .preview-on {
				width:80%;
				background-color:white;
				border:solid 5px #FF3333;
				margin:0 auto;
				font-size:30px;
				position: relative;
				top: calc(50% - 511px);
			}

			.preview-on .email-close{
				border-radius:30px;
				width:50px;
				height:50px;
				color:#FF3333;
				background-color:white;
				border:solid #FF3333 5px;
				text-align:center;
				font-weight:900;
				font-family:arial;
				font-size:20px;
				line-height:2.5;
				position:absolute;
				top:-25px;
				right:-25px;
			}
			.preview-on .email-close:hover{
				cursor:pointer;
				color:white;
				background-color:#ff3333;
			}


			.clicked .preview-on .email-statement{
				font-size:30px;
				font-family:calibri;
			}
			#home {
				text-align: center;
			}

			.top-stuff{
				position:relative;
				height:200px;
				display:inline-block;
				text-align:center;
				margin:0 auto;
				width:100%;
				padding-top:120px;
				padding-bottom:50px;
			}
			.top-holding{
				display:inline-block;
				margin:0 auto;
				position:relative;
				width:auto;
			}
			.top-holding div{
				float:left;
				margin:0 40px;

			}
			.content-button{
				
				margin:0 auto;
				width:400px;
				color:white;
				background-color:#FF3333;
				padding:20px 0;
				font-size:60px;
				font-weight:900;
				cursor:pointer;
			}

			.content-button:hover{
				color:#FF3333;
				background-color:white;
				border:solid 5px #FF3333;
			}

			#email-wrapper {
				background-color:;
				width: 560px;
				padding: 30px;
				margin: 0 auto;
				text-align: center;
				display: inline-block;
				font-family: Helvetica, Arial, sans-serif;
			}

			#email-wrapper #send-mail {
				background-color: #FF3333;
				border: 4px solid #b71f28;

				padding: 5px;
				margin: 0 auto;
				height: 40px;
				width: 360px;

				color: white;

				font-size: 30px;
				font-weight: 600;
				text-align: center;
				vertical-align: middle;
				box-shadow: 0px 2px 2px gray;
			}

			#email-wrapper #send-mail:hover {
				cursor: pointer;
			}

			#email-wrapper #res-wrapper {
				height: 222px;
				width: 380px;
				padding: 10px;
				margin: 0 auto;
			}

			#email-wrapper #status {
				width: 356px;
				height: 20px;
				padding: 10px;
				border: 2px solid gray;

				text-align: center;
				color: white;
				font-weight: 600;
				background-color: gray;
			}

			#email-wrapper #response {
				height: 156px;
				width: 356px;
				padding: 10px;

				box-shadow: 0px 0px 6px gray inset;
				background-color: white;
				border: 2px solid gray;

				color: darkgray;
				text-align: left;

				overflow-x: none;
				overflow-y: auto;
			}

			#email-wrapper #response.done {
				border-color: green;
			}

			#email-wrapper #status.done {
				background-color: green;
				border-color: green;
			}

			#email-wrapper #email-holder {
				text-align: center;
			}

			#email-wrapper #email-holder div {
				width: 200px;
				height: 100px;
				display: inline-block;
			}

			#email-wrapper #add-email {
				display: inline-block;
				width: 550px;
				/*height: 100px;*/
				margin: 0 auto;
				margin-top: 30px;
				margin-bottom: 20px;
				background-color:;
			}

			#email-wrapper #add-email input {width: 530px; padding: 8px 5px; font-size: 18px; float: left; }

			#email-wrapper #add-email input.selected { outline: #9ad6ec solid 2px; }

			#email-wrapper #add-email-button { width: 	25px; height: 23px; float: left; cursor: pointer; background-color: #9ad6ec;
				padding-top: 2px; border: 4px solid #26bae7; color: white; box-shadow: 1px 1px 1px gray; text-align: center; font-size: 30px; line-height: 22px;
			}

			#email-wrapper .small-wrapper {
				height: 40px;
				margin: 7px auto;
				position: relative;
			}

			#email-wrapper .checkmark {
				margin: 10px;
				width: 12px;
				height: 12px;
				border: 4px solid white;
				border-radius: 10px;
				background-color: red;
				box-shadow: 0 0 2px red;
				line-height: 14px;
				font-size: 36px;
				color: black;
				position: absolute;
				right: -45px;
				top: 0px;
			}

			#keyboard {
				width: 550px;
				margin: 0 0 25px 0;
			}

			#keyboard .keyboard-row {
				width: 100%;
				height: 35px;
				text-align: center;
			}

			#keyboard .keyboard-key {
				height: 25px;
				width: 25px;
				font-weight:600;
				line-height:25px;
				text-align: center;
				display: inline-block;
				padding: 4px;
				border: 2px solid lightgray;
			}

			#keyboard .keyboard-key:hover {
				background-color: #FF3333;
				color:white;
				cursor: pointer;
			}

			/* Bksp 	 */ #keyboard .keyboard-row.row-0 .keyboard-key.key-13{ width:   50px; background-color: #FF3333;color:maroon; }
									  #keyboard .keyboard-row.row-0 .keyboard-key.key-13:hover { background-color:;color:white; }
			/* Tab 		 */ #keyboard .keyboard-row.row-1 .keyboard-key.key-0 { width:   50px; background-color: ; } 
			/* Caps 	 */ #keyboard .keyboard-row.row-2 .keyboard-key.key-0 { width:   56px; background-color: #26bae7;color:#0a5156; } #keyboard .keyboard-row.row-2 .keyboard-key.key-0:hover{color:#26BAE7;background-color:#0A5156;}
			/* New 		 */ #keyboard .keyboard-row.row-2 .keyboard-key.key-12{ width:   56px; background-color: #26bae7;color:white;font-weight:900;} #keyboard .keyboard-row.row-2 .keyboard-key.key-12:hover{background-color:#0A5156;}
			/* L Shift */ #keyboard .keyboard-row.row-3 .keyboard-key.key-0,
			/* R Shift */ #keyboard .keyboard-row.row-3 .keyboard-key.key-11{ width: 74.5px; background-color: #FF3333;color:maroon; }
			/* L Shift */ #keyboard .keyboard-row.row-3 .keyboard-key.key-0:hover,
			/* R Shift */ #keyboard .keyboard-row.row-3 .keyboard-key.key-11:hover{color:white;}
			/* Clear 	 */ #keyboard .keyboard-row.row-4 .keyboard-key.key-0 { width:   70px; background-color: #26bae7;color:#0a5156; } #keyboard .keyboard-row.row-4 .keyboard-key.key-0:hover{color:#26BAE7;background-color:#0A5156;}
			/* Spacebar*/ #keyboard .keyboard-row.row-4 .keyboard-key.key-1 { width:  300px; } 
			/* @			 */ #keyboard .keyboard-row.row-4 .keyboard-key.key-2,
			/* .com 	 */ #keyboard .keyboard-row.row-4 .keyboard-key.key-3 { width: 62.5px; background-color: #26bae7;color:#0a5156; }
			/* @			 */ #keyboard .keyboard-row.row-4 .keyboard-key.key-2:hover,
			/* .com 	 */ #keyboard .keyboard-row.row-4 .keyboard-key.key-3:hover{ color:#26BAE7;background-color:#0A5156;}
		</style>
		<script src='/htdocs/js/send-mail.js'></script>
	</head>
	<body>
		

		<div id="home" data-role="page">
			<?php require("page-pieces/header.php"); ?>
			<div class="headBox1">
				<h1 id="title">Enter Recipients:</h1>
			</div>

			<div class="top-stuff">
				<div class="top-holding">
					<div class="pig-left"><img src="../assets/email-sender.png"></div>
					<div class="content-button" onclick="preview()">Tap & Read</div>
					<div class="pig-right"><img src="../assets/email-sender2.png"></div>
				</div>
			</div>

			<div id="email-wrapper">
				<div id="add-email">
					<div class="small-wrapper"><input onclick="keepFocus(this)" class="email" type="text" placeholder="email@example.com"></input><div class="checkmark" title="Not Sent"></div></div>
					<div class="small-wrapper"><input onclick="keepFocus(this)" class="email" type="text" placeholder="email@example.com"></input><div class="checkmark" title="Not Sent"></div></div>
					<div id="add-email-button" onclick="addEmail(this)">+</div>
				</div>

				<!-- Adding new comments -->
				<?php include("page-pieces/keyboard.php"); ?>

				<div id="send-mail" onclick="sendMailWrapper()">Send Mail</div>
				<div id="res-wrapper" style="display: none;" onclick="loadImageFileAsURL()">
					<div id="response">...response</div>
					<div id="status">...</div>
				</div>
			</div>
			<?php require("page-pieces/footer-simple.php"); ?>
		</div>

		<div class="clicked" onclick="previewClose()">
			<div class="preview-on">
			<div class="email-close" onClick="previewClose()">X</div>
			<?php include("page-pieces/email-statement.php"); ?>
			</div> 
		</div>
	</body>
</html>