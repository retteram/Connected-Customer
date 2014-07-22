// Drop-down menu function
function menu_button() {
	if($(".nav-dropdown").css("display") == "block"){
		$(".nav-dropdown").animate({height: "0px"}, 200, function(){
			$(".nav-dropdown").css("display", "none");
		});
	} else {
		$(".nav-dropdown").css("display", "block");
		$(".nav-dropdown").animate({height: "230px"}, 200);
	}
}

// Move the menu to the Right
function moveRight() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) > (-4240)){
		x = parseInt($('.container-list').css('left'))-1080;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar(x);
	}
}

function moveRight2() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) > (-1080)){
		x = parseInt($('.container-list').css('left'))-1080;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar2(x);
	}
}

function moveRight3() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) > (-4320)){
		x = parseInt($('.container-list').css('left'))-1080;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar3(x);
	}
}
// Move the menu to the left
function moveLeft() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) < 0){
		x = parseInt($('.container-list').css('left'))+1080;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar(x);
	}
}

function moveLeft2() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) < 0){
		x = parseInt($('.container-list').css('left'))+1080;
		$('.container-list').animate({left: (x.toString()+"px")}, 300);
		$('.container-list').css('left', x.toString()+"px");
		update_navbar2(x);
	}
}

function moveLeft3() {
	var x = 0;
	if(parseInt($('.container-list').css('left')) < 0){
		x = parseInt($('.container-list').css('left'))+1080;
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

	x = x/1080;
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

	x = x/1080;
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

	x = x/1080;
	if(x < 0)
		x = -x;

	x = 3 - x;
	navnumbers[x].className = "nav-number highlight";
}