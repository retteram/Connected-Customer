var filterList = [];

function filterAdd(options) {
	for(var i = 0; i < options.length; i++){
		var index = filterList.indexOf(options[i]);

		if (!(index > -1))
			filterList.push(options[i]);

		// document.getElementById('list').innerHTML = filterList.toString();

		var classElements = document.getElementsByClassName(options[i]);
		for(var j = 0; j < classElements.length; j++){
			classElements[j].style.display = 'block';
		}
	}
}

function filterRemove(options) {
	for(var i = 0; i < options.length; i++){
		var index = filterList.indexOf(options[i]);

		if (index > -1)
		    filterList.splice(index, 1);

		// document.getElementById('list').innerHTML = filterList.toString();

		var classElements = document.getElementsByClassName(options[i]);
		for(var j = 0; j < classElements.length; j++){
			classElements[j].style.display = 'none';
		}
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