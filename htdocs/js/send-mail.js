function addEmail(elem) {
	$("<div class='small-wrapper'><input onclick='keepFocus(this)'' class='email' type='text' placeholder='email@example.com'></input><div class='checkmark'></div></div>").insertAfter($(elem).prev());
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
						$("<span style='color: gray; position: absolute; right: -90px; top: 10px; font-style: italic'>Sent</span>").insertAfter(value);
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

function keepFocus(input) {
	$("#add-email").data('last-selected', $(input));
	$(input).addClass("selected");
}

function keyClick(key) {
	// alert($(key).attr('data-primary'));
	console.log($(key).data('primary').toString());
	var focused = $("#add-email").data("last-selected");
	/*
	if($(focused).prop('tagName') == "INPUT") {
		var keycode = $(key).data("primary");
		if($('#keyboard').data('shift')){
			keycode = $(key).data("primary");
		}
		// $(focused).val($(focused).val() + $(key).text('data-secondary'));
	}
	*/

	var keycode = $(key).data('primary');
	if($("#keyboard").data('shift')){
		keycode = $(key).data('secondary');
	}
	switch(keycode) {
		case "Shift":
				var keytype = 'primary';
				if($("#keyboard").data('shift')){
					$("#keyboard").data('shift', false);
				} else {
					$("#keyboard").data('shift', true);
					keytype = 'secondary';
				}
				$(".keyboard-key").each(function(index, value){
					$(value).text($(value).data(keytype));
					if($(value).data('primary') == 'Shift'){
						$(value).css('background-color', '');
					}
				});
				break;
		case "Bksp":
				break;
		default:
				if($(focused).prop('tagName') == "INPUT") {
					$(focused).addClass('selected');
					var keytype = "primary";
					if($("keyboard").data('shift')){
						keytype = 'secondary';
						$("keyboard").data('shift', false);
					}
					// $(focused).val($(focused).val() + $(key).text('data-secondary'));
				}
				break;
	}
}
