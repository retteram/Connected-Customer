// This function controls the clock in the header.
function set_clock() {
	/*	
	if($("#colon").text() == ":"){
		$("#colon").text(" ");
	} else {
		$("#colon").text(":");
	}
	*/

	var currentTime = new Date();

	var hour = currentTime.getHours();
	var min = currentTime.getMinutes();
	if(min < 10){
		min = "0" + min;
	}

	var am_pm = "";
	if((hour / 12) < 1) am_pm = "am"
	else am_pm = "pm"

	hour = hour % 12;

	var date = currentTime.getDate();
	var month = currentTime.getMonth();
	var year = currentTime.getFullYear()%100;

	$(".date").text(month+"/"+date+"/"+year);
	$("#hours").text(hour);
	$("#minutes").text(min);
	$("#am_pm").text(am_pm);

	var daynum = currentTime.getDay();
	var day = "";
	switch(daynum){

		case 0: day = "Sunday"; break;
		case 1: day = "Monday"; break;
		case 2: day = "Tuesday"; break;
		case 3: day = "Wednesday"; break;
		case 4: day = "Thursday"; break;
		case 5: day = "Friday"; break;
		case 6: day = "Saturday"; break;

	}

	$(".dayofweek").text(day);
}