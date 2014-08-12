/* Scrolling Functions */
// function loaded() {
// 	myScroll = new iScroll('wrapper');
// }

var globalTime = 200;

var myScroll;
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
//document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);
/* END Scrolling Functions */


$(function(){
	myScroll = new iScroll('wrapper');
	filterAdd(whichChecked());
	$('.list-close').hide();
	// $('.list-line').hide();

	$('#attraction1').click(function(){toggleCheckbox(	   'all'	 ); allClicked();});
	$('#attraction2').click(function(){toggleCheckbox(	 'history'	 ); historyClicked();});
	$('#attraction3').click(function(){toggleCheckbox(	 'dining'	 ); diningClicked();});
	$('#attraction4').click(function(){toggleCheckbox('entertainment'); entertainmentClicked();});
	$('#attraction5').click(function(){toggleCheckbox(	 'nature'	 ); natureClicked();});
	$('#attraction6').click(function(){toggleCheckbox(	'shopping'	 ); shoppingClicked();});
});

function toggleCheckbox(id) {
    document.getElementById(id).checked = !document.getElementById(id).checked;
}

function enlarge(loader) {
	var listItem = loader.parentNode;
	loader.style.height = "200px";
	var time = globalTime;

	$(listItem).animate({
		height: '400px'
	}, time);

	$(listItem).find(".list-image").animate({
		width: '283px',
		top: '105px',
		left: '135px'
	}, time);

	$(listItem).find(".paragraph").css('position', 'relative');
	$(listItem).find(".paragraph").css('right', '0px');
	$(listItem).find(".paragraph").animate({
		right: '-300px',
		top: '4px',
		width: '500px',
		height: '205px'
	}, time);
	$(listItem).find(".paragraph").toggleClass('columns');

	$(listItem).find(".list-close").show();
	$(listItem).find(".list-close").css('right', '25px');
	$(listItem).find(".list-close").css('top', '30px');
	$(listItem).find(".list-close").animate({
		right: '25px',
		top: '30px'
	}, time);

	// $(listItem).find(".list-line").show();
	$(listItem).find(".list-line").css('background-color', '#808284');
	$(listItem).find(".list-line").animate({
		width: '800px',
		height: '2px'
	}, time);

	$(listItem).find(".infobox").css("display", "block");
}

function shrink(loader) {
	var listItem = loader.parentNode;
	var time = globalTime;

	$(listItem).animate({
		height: '200px'
	}, time);

	$(listItem).find(".list-image").css("position", "absolute");
	$(listItem).find(".list-image").css("left", "auto");
	$(listItem).find(".list-image").css("right", "600px");
	$(listItem).find(".list-image").animate({
		width: '283px',
		top: '0px',
		right: '0px'
	}, time);

	$(listItem).find(".paragraph").animate({
		position: 'relative',
		right: '0px',
		top: '4px',
		height: '80px'
	}, time);
	$(listItem).find(".paragraph").toggleClass('columns');

	$(listItem).find(".list-close").hide();
	$(listItem).find(".list-close").animate({
		position: 'absolute',
		right: '0px',
		top: '0px'
	}, time);

	$(listItem).find(".list-line").animate({
		width: '2px',
		height: '2px'
	}, time, function(){
			// $(listItem).find(".list-line").hide();
			$(listItem).find(".list-line").css("background-color", "white");
		}
	);

	$(listItem).find(".infobox").css("display", "none");
}

/* BEGIN LIST FUNCTIONS */
var filterList = [];

function whichChecked() {
	var checked = [];
	if(document.getElementById("all").checked){
		checked = ['all','history','dining','nature','entertainment','shopping'];
		// filterAdd(['all','history','dining','nature','entertainment','shopping']);
	}

	if(document.getElementById("history").checked){
		checked.push('history');
		// filterAdd(['history']);
	}

	if(document.getElementById("dining").checked){
		checked.push('dining');
		// filterAdd(['dining']);
	}

	if(document.getElementById("nature").checked){
		checked.push('nature');
		// filterAdd(['nature']);
	}

	if(document.getElementById("entertainment").checked){
		checked.push('entertainment');
		// filterAdd(['entertainment']);
	}

	if(document.getElementById("shopping").checked){
		checked.push('shopping');
		// filterAdd(['shopping']);
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

	var checkedItems = whichChecked();
	if(checkedItems.length < 1){
		if($("#all").checked){
			$("#all").checked = false;
		}
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

