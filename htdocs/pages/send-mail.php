		
		<style>
			#email-wrapper {
				width: 490px;
				padding: 5px;
				margin-left: 80px;
				text-align: left;
				display: inline-block;
				font-family: Helvetica, Arial, sans-serif;
			}

			#email-wrapper #send-mail {
				background-color: #FF3333;
				border: 4px solid darkred;

				padding: 5px;
				height: 40px;
				width: 360px;

				color: darkred;

				font-size: 30px;
				font-weight: 600;
				text-align: center;
				vertical-align: middle;
				box-shadow: 0px 2px 6px gray;
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
				width: 420px;
				/*height: 100px;*/
				margin-top: 30px;
				margin-bottom: 20px;
			}

			#email-wrapper #add-email input {
				width: 375px;
				padding: 8px 5px;
				font-size: 18px;
				float: left;
			}

			#email-wrapper #add-email-button {
				width: 	25px;
				height: 23px;
				float: left;
				cursor: pointer;
				background-color: green;
				padding-top: 2px;
				border: 4px solid darkgreen;
				color: white;
				box-shadow: 1px 1px 4px gray;
				text-align: center;
				font-size: 30px;
				line-height: 22px;
			}

			#email-wrapper .small-wrapper {
				height: 40px;
				margin: 7px auto;
				position: relative;
			}

			#email-wrapper .checkmark {
				margin: 10px;
				margin-right: 7px;
				width: 12px;
				height: 12px;
				border: 4px solid white;
				border-radius: 10px;
				background-color: red;
				box-shadow: 0 0 2px red;
				float: right;
				line-height: 14px;
				font-size: 36px;
				color: black;
			}

			#keyboard {
				width: 550px;
			}

			#keyboard .keyboard-row {
				width: 100%;
				height: 35px;
				text-align: center;
			}

			#keyboard .keyboard-key {
				height: 25px;
				width: 25px;
				text-align: center;
				display: inline-block;
				padding: 4px;
				border: 2px solid lightgray;
			}
			#keyboard .keyboard-key:hover {
				background-color: gray;
				cursor: pointer;
			}

			#keyboard .keyboard-row.row-0 .keyboard-key.key-13,
			#keyboard .keyboard-row.row-2 .keyboard-key.key-0,
			#keyboard .keyboard-row.row-2 .keyboard-key.key-12,
			#keyboard .keyboard-row.row-3 .keyboard-key.key-0,
			#keyboard .keyboard-row.row-3 .keyboard-key.key-11{
				width: 50px;
			}

			#keyboard .keyboard-row.row-4 .keyboard-key.key-0 {
				width:300px;
			}
		</style>
		<script src="/htdocs/libs/jquery-1.11.1.js"></script>
		<?php require("page-pieces/imports.php"); ?>
		<script>
			function addEmail(elem) {
				$("<div class='small-wrapper'><input class='email' type='text' placeholder='email@example.com'></input><div class='checkmark'></div></div>").insertAfter($(elem).prev());
			}

			function sendMailWrapper() {
				checkInterval = [];
				loadFileBase64("../../../PilotDeliverables.pdf");
			}

			function loadFileBase64(file) {
				$.ajax({
					url: "/htdocs/pages/page-pieces/encode-file-base64.php?filename="+file
				}).done(function(data) {
					sendMail(data);
				});
			}

			var checkInterval = [];
			function sendMail(attachment) {
				var toEmails = [];
				$(".email").each(function(index, value) {
					if(value.value != ""){ 
						toEmails.push({"email": (value.value), "name": "", "type": "to"}); 
					}
				});

				$("response").text("...loading");
				$.ajax({
					type: "POST",
					url: 	"https://mandrillapp.com/api/1.0/messages/send.json",
					data: { 
									"key": "KzD7XngTVPG4rpgbiRZJ4g",
							   	"message": {
							    	// "html": "<h1>Here is your content</h1>",
							    	"text": "Your requested document is attached. \nThank you for using the Connected Customer service.",
							    	"subject": "Connected Customer - PDF Document",
							    	"from_email": "isaac.vanhouten@standardregister.com",
							    	"from_name": "Isaac Van Houten",
							    	"to": toEmails,
							    	"headers": {
							    	    "Reply-To": "isaac.vanhouten@standardregister.com"
							   		},
							   		"attachments": [
							   			{
							   				"type": "application/pdf",
							   				"name": "Pilot-Deliverables.pdf",
							   				"content": attachment
							   			}
							   		]
							  	}
							  }
				}).done(function(data) {
					$("#response").addClass("done");
					$("#status").addClass("done");

					for(var i = 0; i < data.length; i++){
						$(".checkmark").each(function(index, value) {
							if(i == index){
								$(value).attr("id", data[i]['_id']);
								if(data[i]['status'] == "sent" || data[i]['status'] == "queued"){
									$(value).css({"background-color": "green", "box-shadow": "0 0 2px green"});
									$("<span style='color: gray; position: absolute; right: -40px; top: 10px; font-style: italic'>Sent</span>").insertAfter(value);
								}
							}
						});
						$("#status").text(data[i]['status']);
					}

					var output = "";
					for (var i = 0; i < data.length; i++){
						output += "email: " + data[i]['email'] + "<br />";
						output += "status: " + data[i]['status'] + "<br />";
						output += "reject_reason: " + data[i]['reject_reason'] + "<br />";
						output += "_id: " + data[i]['_id'] + "<br /><br />";
					}
					$("#response").html(output);

				}).fail(function() {
					$("#response").addClass("fail");
					$("#status").addClass("fail");
					$("#status").text(data[0]['status']);
					$("#response").text("Fail");
				});
			}
		</script>
	</head>
	<body>
	<?php require("page-pieces/header.php"); ?>
		<div id="email-wrapper">

		<div class="headbox">
			<h1 id="title">Enter Recipients:</h1>
		</div>

		<div class="center-piece">
			<img src="../assets/sending-email.png">
		</div>

			<div id="add-email">
				<div class="small-wrapper"><input class="email" type="text" placeholder="email@example.com"></input><div class="checkmark" title="Not Sent"></div></div>
				<div class="small-wrapper"><input class="email" type="text" placeholder="email@example.com"></input><div class="checkmark" title="Not Sent"></div></div>
				<div id="add-email-button" onclick="addEmail(this)">+</div>
			</div>


			<div id="keyboard">
				<?php

					$keyboardlayout = [ // US Standard Keyboard
				    [["`", "~"], ["1", "!"], ["2", "@"], ["3", "#"], ["4", "$"], ["5", "%"], ["6", "^"], ["7", "&"], ["8", "*"], ["9", "("], ["0", ")"], ["-", "_"], ["=", "+"], ["Bksp", "Bksp"]],
				    [["Tab", "Tab"], ["q", "Q"], ["w", "W"], ["e", "E"], ["r", "R"], ["t", "T"], ["y", "Y"], ["u", "U"], ["i", "I"], ["o", "O"], ["p", "P"], ["[", "{"], ["]", "}"], ["\\", "|"]],
				    [["Caps", "Caps"], ["a", "A"], ["s", "S"], ["d", "D"], ["f", "F"], ["g", "G"], ["h", "H"], ["j", "J"], ["k", "K"], ["l", "L"], [";", ":"], ["'", '"'], ["Enter", "Enter"]],
				    [["Shift", "Shift"], ["z", "Z"], ["x", "X"], ["c", "C"], ["v", "V"], ["b", "B"], ["n", "N"], ["m", "M"], [",", "<"], [".", ">"], ["/", "?"], ["Shift", "Shift"]],
				    [[" ", " "]]
				  ];

					$alphabetl = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
					//$alphabetu = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
					$numbers   = ["0","1","2","3","4","5","6","7","8","9"];
					$symbols   = ["!","#","$","%","&","'","*","+","-","/","=","?","^","_","`","{","|","}","~"];

					

					foreach($keyboardlayout as $rindex => $row) {
						echo "<div class='keyboard-row row-$rindex'>";
						foreach($row as $kindex => $key) {
							echo "<div class='keyboard-key key-$kindex' data-primary='".$key[0]."' data-secondary='".$key[1]."'>".$key[0]."</div>";
						}
						echo "</div>";
					}
				?>
			</div>
			<div id="send-mail" onclick="sendMailWrapper()">Send Mail</div>

			<div id="res-wrapper" style="display: none;" onclick="loadImageFileAsURL()">
				<div id="response">...response</div>
				<div id="status">...</div>
			</div>
		</div>
		<?php require("page-pieces/footer-simple.php"); ?>
	</body>
</html>