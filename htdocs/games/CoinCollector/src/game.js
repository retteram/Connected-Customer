(function() {
	var Actor = function(color) {
		this.initialize(color);
	}

	var p = Actor.prototype = new createjs.Bitmap("assets/flying-pig.png");
	p.pixelsPerSecond = 300;

	p.initialize = function(color) {
		// var width = 50;
		// var height = 50;
		// p.graphics.beginFill(color).drawRoundRect(0,0,width,height, 10);
		p.scaleX=0.2;
		p.scaleY=0.2;
	}

	p.movementCalculation = function(delta) { return (delta)/1000*p.pixelsPerSecond; }
	p.moveUp = function(delta) { this.y -= this.movementCalculation(delta); }
	p.moveDown = function(delta) { this.y += this.movementCalculation(delta); }
	p.moveLeft = function(delta) { this.x -= this.movementCalculation(delta); }
	p.moveRight = function(delta) { this.x += this.movementCalculation(delta); }
	p.faceLeft = true;
	window.Actor = Actor;
}());


var canvas;	// Will be linked to the canvas on the HTML page
var ctx;		// Context, equivalent to 'stage' in AS3

// Setting the Stage
var stageHeight;
var stageWidth;

// Pig location
var pigX = 0;
var pigY = 0;
var pigLives = [];

function init() {
	stageHeight = document.getElementById("coinCollector").height;
	stageWidth = document.getElementById("coinCollector").width;

	var stage = new createjs.Stage("coinCollector");
	addBackground(stage);
	addHUD(stage);

	// Setup event listeners for mouse click and move.
	createjs.Touch.enable(stage,true);
    stage.enableMouseOver(10);
    stage.addEventListener("stagemousemove", handleMouseMove);
    createCookie("isaac_cookie", "lots of stuff", 25);

	var myActor = stage.addChild(new Actor("#000"));


	myActor.x = 300; // 60;
	myActor.y = 250; // stage.canvas.height - 130;

	myActor.regX = myActor.image.width/2;
	myActor.regY = myActor.image.height/2;

	var up = false;
	var down = false;
	var left = false;
	var right = false;

	createjs.Ticker.setFPS(120);
	createjs.Ticker.addEventListener("tick", stage);
	createjs.Ticker.addEventListener("tick", tick);

	function tick(event) {

		centerpointX = (myActor.image.width  * (Math.abs(myActor.scaleX))/2) + myActor.x;
		centerpointY = (myActor.image.height * (Math.abs(myActor.scaleY))/2) + myActor.y;


		if( Math.abs(centerpointX - pigX) > 2) { //event.delta*2) {
			if(centerpointX < pigX){
				// alert("PigX: "+pigX+"\nCenterpointX: "+ centerpointX);
				//myActor.moveRight(event.delta);
				myActor.faceLeft = false;
			} else if(centerpointX > pigX){
				//myActor.moveLeft(event.delta);
				myActor.faceLeft = true;
			}
		}

		myActor.rotation += 1;

		if( Math.abs(centerpointY - pigY) > 2) { //event.delta*2) {
			if(centerpointY < pigY){
				//myActor.moveDown(event.delta);
			} else if(centerpointY > pigY){
				//myActor.moveUp(event.delta);
			}
		}

		// myActor.x = pigX - centerpointX;
		// myActor.y = pigY - centerpointY;

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


// Fill background with color
function addBackground(stage) {
	background = new createjs.Shape();
	background.graphics.beginFill("#2F2F4F").drawRect(0, 0, stageWidth, stageHeight);
	background.x = 0;
	background.y = 0;
	stage.addChild(background);

	stars(stage);
}


// Put Heads-up-display on screen
function addHUD(stage) {
	score = new createjs.Text("0 pts", "20px Arial", "#ff7700");
	score.x = stage.canvas.width - 70;
	score.y = 30;
	stage.addChild(score);

	for(var i = 0; i < 4; i++){
		var pigLife = new createjs.Bitmap("assets/flying-pig.png");
		pigLife.x = 20;
		pigLife.y = 20 + 45*i;
		pigLife.scaleX = 0.1;
		pigLife.scaleY = 0.1;
		pigLives.push(stage.addChild(pigLife));
	}
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


// Add a new Asteroid
function createAsteroid(stage) {
	// When called add new asteroid
	
	// Load image
	bitemap = new createjs.Bitmap("assets/asteroid.png");
	
}


// Execute when mouse moves
function handleMouseMove(evt) {
	// alert("Mouse Move");
	pigX = evt.stageX;
	pigY = evt.stageY;
}

// Execute on mouse click up
function handleMouseUp() {
	// alert(getCookie("isaac_cookie"));
}

/** Create a cookie
  *  name:  name of the cookie
  *  value: content of the cookie
  *  days:  how many days until it expires
  */  
function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

// Get a cookie 
//   c_name: name of cookie to get
function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
}