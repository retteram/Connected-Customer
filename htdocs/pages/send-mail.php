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

			#res-wrapper {
				position: absolute;
				top: 200px;
				left: calc(50% - 202px);
				height: 180px;
				width: 380px;
				padding: 10px;
			}

			#status {
				width: 380px;
				height: 20px;
				padding: 10px;
				border: 2px solid gray;

				text-align: center;
				color: white;
				font-weight: 600;
				background-color: gray;
			}

			#response {
				height: 180px;
				width: 380px;
				padding: 10px;

				box-shadow: 0px 0px 6px gray inset;
				background-color: white;
				border: 2px solid gray;

				color: darkgray;

				overflow-x: none;
				overflow-y: auto;
			}

			#response.done {
				border-color: green;
			}

			#status.done {
				background-color: green;
				border-color: green;
			}
		</style>
		<script>
			function sendMail() {
				$("response").text("...loading");
				$.ajax({
					type: "POST",
					url: 	"https://mandrillapp.com/api/1.0/messages/send.json",
					data: { 
									"key": "KzD7XngTVPG4rpgbiRZJ4g",
							   	"message": {
							    	"html": "<p>Example HTML content</p>",
							    	"text": "Example text content",
							    	"subject": "example subject",
							    	"from_email": "isaac.vanhouten@standardregister.com",
							    	"from_name": "Isaac Van Houten",
							    	"to": [
							    			{
							    			    "email": "isaac.vanhouten@standardregister.com",
							    			    "name": "Isaac Van Houten",
							    			    "type": "to"
							    			}
							    	],
							    	"headers": {
							    	    "Reply-To": "isaac.vanhouten@standardregister.com"
							   		} 
							  	}
							  }
				}).done(function(data) {
					$("#response").addClass("done");
					$("#status").addClass("done");
					$("#status").text(data[0]['status']);

					var output = "";
					for (var i = 0; i < data.length; i++){
						output += "email: " + data[i]['email'] + "<br />";
						output += "status: " + data[i]['status'] + "<br />";
						output += "reject_reason: " + data[i]['reject_reason'] + "<br />";
						output += "_id: " + data[i]['_id'] + "<br /><br />";
					}
					$("#response").html(output);
				}).fail(function() {
					$("#response").text("Fail");
				});
			}
		</script>
	</head>
	<body>
		<div id="send-mail" onclick="sendMail()">Send Mail</div>
		<div id="res-wrapper">
			<div id="response">...response</div>
			<div id="status">...</div>
		</div>
	</body>
</html>