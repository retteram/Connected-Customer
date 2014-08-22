// Drop-down menu function
function menu_button() {
	var nvdrop = $(".nav-dropdown");

	if(nvdrop.css("display") == "block"){
		$(".menu-button").removeClass("darker");
		nvdrop.animate({height: "0px"}, 200, function(){
			nvdrop.css("display", "none");
		});
	} else {
		$(".menu-button").addClass("darker");
		nvdrop.css("display", "block");
		nvdrop.animate({height: "155px"}, 200);
	}
}

pageWidth = 1000;
pageWidth2 = 1080;

// Move the menu to the Right
function moveRight() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) > (-(4*pageWidth))){
		x = parseInt($('.container-list').css('left'))-pageWidth;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar(x);
	}
}

function moveRight2() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) > (-pageWidth)){
		x = parseInt($('.container-list').css('left'))-pageWidth;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar2(x);
	}
}

function moveRight3() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) > (-(3*pageWidth2))){
		x = parseInt($('.container-list').css('left'))-pageWidth2;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar3(x);
	}
}
// Move the menu to the left
function moveLeft() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) < 0){
		x = parseInt($('.container-list').css('left'))+pageWidth;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar(x);
	}
}

function moveLeft2() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) < 0){
		x = parseInt($('.container-list').css('left'))+pageWidth;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar2(x);
	}
}
function moveLeft3() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) < 0){
		x = parseInt($('.container-list').css('left'))+pageWidth2;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar3(x);
	}
}
// Update Navbar
function update_navbar(position) {
	x = position;

	var navcircles = document.getElementsByClassName('nav-circle');
	for(var i = 0; i < 5; i++){
		navcircles[i].className = "nav-circle";
	}

	x = x/pageWidth;
	if(x < 0)
		x = -x;

	x = 4 - x;
	navcircles[x].className = "nav-circle highlight";
}

function update_navbar2(position) {
	x = position;

	var navcircles = document.getElementsByClassName('nav-circle');
	for(var i = 0; i < 2; i++){
		navcircles[i].className = "nav-circle";
	}

	x = x/pageWidth;
	if(x < 0)
		x = -x;

	x = 1 - x;
	navcircles[x].className = "nav-circle highlight";
}
function update_navbar3(position) {
	x = position;

	var navnumbers = document.getElementsByClassName('nav-number');
	for(var i = 0; i < 4; i++){
		navnumbers[i].className = "nav-number";
	}

	x = x/pageWidth2;
	if(x < 0)
		x = -x;

	x = 3 - x;
	navnumbers[x].className = "nav-number highlight";
}
