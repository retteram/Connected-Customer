var myScroll;

$(function(){
	filterAdd(whichChecked());
	$('.list-close').hide();
	$('.list-line').hide();
});

function enlarge(loader) {
	var listItem = loader.parentNode;
	loader.style.height = "200px";

	$(listItem).animate({
		height: '400px'
	});

	$(listItem).find(".list-image").animate({
		width: '283px',
		top: '110px',
		left: '135px'
	});

	$(listItem).find(".paragraph").css('position', 'relative');
	$(listItem).find(".paragraph").css('right', '0px');
	$(listItem).find(".paragraph").animate({
		right: '-300px',
		top: '20px',
		width: '500px'
	});

	$(listItem).find(".list-close").show();
	$(listItem).find(".list-close").css('right', '25px');
	$(listItem).find(".list-close").css('top', '30px');
	$(listItem).find(".list-close").animate({
		right: '25px',
		top: '30px'
	});

	$(listItem).find(".list-line").show();
	$(listItem).find(".list-line").animate({
		height: '2px',
		width: '800px'
	});
}

function shrink(loader) {
	var listItem = loader.parentNode;

	$(listItem).animate({
		height: '200px'
	});

	$(listItem).find(".list-image").css("position", "absolute");
	$(listItem).find(".list-image").css("left", "auto");
	$(listItem).find(".list-image").css("right", "600px");
	$(listItem).find(".list-image").animate({
		width: '283px',
		top: '0px',
		right: '0px'
	});

	$(listItem).find(".paragraph").animate({
		position: 'relative',
		right: '0px',
		top: '4px'
	});

	$(listItem).find(".list-close").hide();
	$(listItem).find(".list-close").animate({
		position: 'absolute',
		right: '0px',
		top: '0px'
	});

	$(listItem).find(".list-line").animate({
		width: '0px',
		height: '0px'
	}, function(){
		$(listItem).find(".list-line").hide();
	});

}

/* BEGIN LIST FUNCTIONS */
var filterList = [];

function whichChecked() {
	var checked = [];
	if(document.getElementById("all").checked){
		filterAdd(['all','history','dining','nature','entertainment','shopping']);
	}

	if(document.getElementById("history").checked){
		filterAdd(['history']);
	}

	if(document.getElementById("dining").checked){
		filterAdd(['dining']);
	}

	if(document.getElementById("nature").checked){
		filterAdd(['nature']);
	}

	if(document.getElementById("entertainment").checked){
		filterAdd(['entertainment']);
	}

	if(document.getElementById("shopping").checked){
		filterAdd(['shopping']);
	}

	return checked;
}

function filterAdd(options) {
	for(var i = 0; i < options.length; i++){
		var index = filterList.indexOf(options[i]);

		if (!(index > -1))
			filterList.push(options[i]);

		// document.getElementById('list').innerHTML = filterList.toString();
		$('.'+options[i]).stop();
		$('.'+options[i]).show();
		$('.'+options[i]).animate({
			'height'		: '200px',
			'padding-top'	: '',
			'padding-right'	: '',
			'padding-bottom': '',
			'padding-left'	: ''
			}, 300, function(){
				myScroll.refresh();
			}
		);
	}
}

function filterRemove(options) {
	for(var i = 0; i < options.length; i++){
		var index = filterList.indexOf(options[i]);

		if (index > -1)
		    filterList.splice(index, 1);

		// document.getElementById('list').innerHTML = filterList.toString();
		$('.'+options[i]).stop();
		$('.'+options[i]).animate({
			'height'		: '0px', 
			'padding-top'	: '0px',
			'padding-bottom': '0px'
			}, 300, function(){
				$(this).hide();
				myScroll.refresh();
			}
		);
	}
}

function changeAllBoxes(torf) {
	var checkboxes = [];
	checkboxes['all'] = document.getElementById("all");
	checkboxes['history'] = document.getElementById("history");
	checkboxes['shopping'] = document.getElementById("shopping");
	checkboxes['entertainment'] = document.getElementById("entertainment");
	checkboxes['nature'] = document.getElementById("nature");
	checkboxes['dining'] = document.getElementById("dining");

	checkboxes['history'].checked = torf;
	checkboxes['shopping'].checked = torf;
	checkboxes['entertainment'].checked = torf;
	checkboxes['nature'].checked = torf;
	checkboxes['dining'].checked = torf;
}

function allClicked() {
	var checkboxes = [];
	checkboxes['all'] = document.getElementById("all");
	checkboxes['history'] = document.getElementById("history");
	checkboxes['shopping'] = document.getElementById("shopping");
	checkboxes['entertainment'] = document.getElementById("entertainment");
	checkboxes['nature'] = document.getElementById("nature");
	checkboxes['dining'] = document.getElementById("dining");

	if(checkboxes['all'].checked){
		filterAdd(['history','shopping','entertainment','nature','dining']);
		changeAllBoxes(true);
	} else {
		filterRemove(['history','shopping','entertainment','nature','dining']);
		changeAllBoxes(false);
	}
}

function historyClicked() {
	if(document.getElementById("history").checked)
		filterAdd(['history']);
	else
		filterRemove(['history']);
}

function diningClicked() {
	if(document.getElementById("dining").checked)
		filterAdd(['dining']);
	else
		filterRemove(['dining']);
}

function entertainmentClicked() {
	if(document.getElementById("entertainment").checked)
		filterAdd(['entertainment']);
	else
		filterRemove(['entertainment']);
}

function natureClicked() {
	if(document.getElementById("nature").checked)
		filterAdd(['nature']);
	else
		filterRemove(['nature']);
}

function shoppingClicked() {
	if(document.getElementById("shopping").checked)
		filterAdd(['shopping']);
	else
		filterRemove(['shopping']);
}
/* END LIST FUNCTIONS */