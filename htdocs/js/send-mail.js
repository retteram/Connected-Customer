$(function() {
	keepFocus($('input.email').first());

	$('input').focusout(function() {
		$(this).removeClass('selected');
	});

	$('input').focusin(function() {
		$('input').removeClass('selected');
		$(this).addClass('selected');
	})
})


function addEmail(elem) {
	$("<div class='small-wrapper'><input onclick='keepFocus(this)' class='email' type='text' placeholder='email@example.com'></input><div class='checkmark'></div></div>").insertAfter($(elem).prev());
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

	$(".small-wrapper").each(function(index, element) {
		if($(element).find("input").val().indexOf("@") > -1){
			$(element).find(".checkmark").first().css({"background-color": "yellow", "box-shadow": "0 0 2px yellow"});
			$("<span style='color: gray; position: absolute; right: -120px; top: 10px; font-style: italic'>Sending...</span>").insertAfter($(element).find(".checkmark").first());
		}
	});

	$("#response").text("...loading");
	$.ajax({
		type: "POST",
		url: 	"https://mandrillapp.com/api/1.0/messages/send.json",
		data: { 
						"key": "KzD7XngTVPG4rpgbiRZJ4g",
				   	"message": {
				    	// "html": "<h1>Here is your content</h1>",
				    	"text": "Your requested document is attached. \nThank you for using the Connected Customer service.",
				    	"subject": "Connected Customer - PDF Document",
				    	"from_email": "sheloo.koul@standardregister.com",
				    	"from_name": "Sheloo Koul",
				    	"to": toEmails,
				    	"headers": {
				    	    "Reply-To": "sheloo.koul@standardregister.com"
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
						$(value).parent().find("span").first().remove();
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
	var focused = $("#add-email").data("last-selected");
	var keycode = $(key).text();

	var keytypes = ['primary', 'secondary'];
	var keytype = 0;

	var capsClicked = false;
	var shiftClicked = false;
	var useChar = false;

	switch(keycode) {
		case "Bksp":
					$(focused).val($(focused).val().substring(0, $(focused).val().length-1))
				break;

		case "Tab":

				break;

		case "Caps":
					capsClicked = true;
				break;

		case "New":
					addEmail($("#add-email-button"));
				break;

		case "Clear":
					$(focused).val("");
				break;

		case "Shift":
					shiftClicked = true;
				break;

		default:
					// console.log($(key).data(keytypes[keytype]));
					useChar = true;
					shiftClicked = false;
					capsClicked = false;
				break;
	}
	
	if($(focused).prop('tagName') == "INPUT") {
		$(focused).addClass('selected');
	}

	if(capsClicked)  {
		var set1 = true;
		if($("#keyboard").data("caps")){
			set1 = false;
		}
		setCaps(set1);
		setShift(false);
		if($("#keyboard").data('caps')){
			keytype = 1;
		}
	}

	if(!capsClicked) {
		if($("#keyboard").data("caps")){
			keytype = 1;
		} else {
			keytype = 0;
		}
	}


	if(shiftClicked) {
		var set1 = true;
		if($("#keyboard").data("shift")){
			set1 = false;
		}
		setShift(set1);
		setCaps(false);
		if($("#keyboard").data('shift')){
			keytype = 1;
		}
	} else if ($("#keyboard").data("shift") || $("#keyboard").data('caps')){
		keytype = 1;
	}

	if(useChar){
		$(focused).val($(focused).val() + $(key).data(keytypes[keytype]));	
	}

	if(!shiftClicked && $("#keyboard").data('shift')) {
		setShift(false);
		keytype = 0;
	}

	$(".keyboard-key").each(function(index, value){
		$(value).text($(value).data(keytypes[keytype]));
		$(value).data(keytypes[keytype]);
	});
}


function setCaps(on) {
	if(on){
		$("#keyboard").data('caps', true);
		$(".keyboard-row.row-2 .key-0").css("background-color", "#0A5156");
	} else {
		$("#keyboard").data('caps', false);
		$(".keyboard-row.row-2 .key-0").css("background-color", "");
	}
}


function setShift(on) {
	if(on){
		$("#keyboard").data('shift', true);
		$(".keyboard-row.row-3 .key-0").css({"background-color": "white", color:"#FF3333"});
		$(".keyboard-row.row-3 .key-11").css({"background-color": "white", color:"#FF3333"});
	} else {
		$("#keyboard").data('shift', false);
		$(".keyboard-row.row-3 .key-0").css({"background-color": "", color:""});
		$(".keyboard-row.row-3 .key-11").css({"background-color": "", color:""});	
	}
}
