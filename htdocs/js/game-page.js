(function() {
	var Actor = function(color) {
		this.initialize(color);
	}

	var p = Actor.prototype = new createjs.Bitmap("../assets/pigLaugh.png");
	p.pixelsPerSecond = 200;

	p.initialize = function(color) {
		// var width = 50;
		// var height = 50;
		// p.graphics.beginFill(color).drawRoundRect(0,0,width,height, 10);
		p.scaleX=0.4;
		p.scaleY=0.4;
	}

	p.movementCalculation = function(delta) {
		return (delta)/1000*p.pixelsPerSecond;
	}

	p.moveUp = function(delta) {
		this.y -= this.movementCalculation(delta);
	}

	p.moveDown = function(delta) {
		this.y += this.movementCalculation(delta);
	}

	p.moveLeft = function(delta) {
		this.x -= this.movementCalculation(delta);
	}

	p.moveRight = function(delta) {
		this.x += this.movementCalculation(delta);
	}

	p.faceLeft = true;

	window.Actor = Actor;
}());


var canvas;
var ctx;
var stageHeight;
var stageWidth;

function init() {
	stageHeight = document.getElementById("demoCanvas").height;
	stageWidth = document.getElementById("demoCanvas").width;

	var stage = new createjs.Stage("demoCanvas");
	addBackground(stage);
	createjs.Touch.enable(stage);
	var myActor = stage.addChild(new Actor("#000"));

	myActor.x = 100;
	myActor.y = 100;

	var up = false;
	var down = false;
	var left = false;
	var right = false;

	createjs.Ticker.setFPS(60);
	createjs.Ticker.addEventListener("tick", stage);
	createjs.Ticker.addEventListener("tick", tick);

	function tick(event) {
		if ((key.isPressed('up') || key.isPressed('w')) && (myActor.y > 0)) {
			myActor.moveUp(event.delta);
		}
		
		if ((key.isPressed('down') || key.isPressed('s')) 
			&& (myActor.y < (stageHeight - (myActor.image.height * myActor.scaleY)))) {

			myActor.moveDown(event.delta);
		}

		if ((key.isPressed('left') || key.isPressed('a')) && (myActor.x > 0)) {
			if(!myActor.faceLeft){
				myActor.regX = 0;
				myActor.scaleX = -myActor.scaleX;
				myActor.faceLeft = true;
			}
			myActor.moveLeft(event.delta);
		}

		if ((key.isPressed('right') || key.isPressed('d')) 
			&& (myActor.x < (stageWidth - (myActor.image.width * Math.abs(myActor.scaleX))))) {

			if(myActor.faceLeft){
				myActor.regX = myActor.image.width;
				myActor.scaleX = -myActor.scaleX;
				myActor.faceLeft = false;
			}
			myActor.moveRight(event.delta);
		}

		if (key.isPressed('enter')) {
			alert("Y pos: " + myActor.y + 
				  "\nHeight: " + myActor.image.height + 
				  "\nX pos: " + myActor.x + 
				  "\nWidth: " + myActor.image.width +
				  "\nStage Height: " + stageHeight +
				  "\nStage Width: " + stageWidth);
		}
	}
}


function addBackground(stage) {
	background = new createjs.Shape();
	background.graphics.beginFill("#2F2F4F").drawRect(0, 0, stageWidth, stageHeight);
	background.x = 0;
	background.y = 0;
	stage.addChild(background);

	stars(stage);
}

// Paint a random starfield.
function stars(stage) {
	// Draw 50 stars.
	for (i = 0; i <= 50; i++) {

		//Create a Shape DisplayObject.
	    circle = new createjs.Shape();
	    circle.graphics.beginFill("white").drawCircle(0, 0, 4);

	    //Set position of Shape instance.
	    circle.x = Math.floor(Math.random() * stageWidth);
	    circle.y = Math.floor(Math.random() * stageHeight);

	    //Add Shape instance to stage display list.
	    stage.addChild(circle);
	}
}

$('#demoCanvas').mousemove(function(e) {
	alert("More things");
    var pos = findPos(this);
    var x = e.pageX - pos.x;
    var y = e.pageY - pos.y;
    var coordinateDisplay = "x=" + x + ", y=" + y;
    $('#message').text(coordinateDisplay);
});

