// Global variables
var shipX = 0;              // X position of ship
var shipY = 0;              // Y position of ship
var canvas;                 // canvas
var ctx;                    // context
var back = new Image();     // storage for new background piece
var oldBack = new Image();  // storage for old background piece
var ship = new Image();     // ship
var shipX = 0;              // current ship position X
var shipY = 0;              // current ship position Y
var oldShipX = 0;           // old ship position Y
var oldShipY = 0;           // old ship position Y

// This function is called on page load.
function canvasSpaceGame() {

  // Get the canvas element.
  canvas = document.getElementById("myCanvas");

  // Make sure you got it.
  // If you have it, create a canvas user inteface element.
  if (canvas.getContext){

    // Specify 2d canvas type.
    ctx = canvas.getContext("2d");

    // Paint it black.
    ctx.fillStyle = "#2F2F4F";
    ctx.rect(0, 0, 846, 766);
    ctx.fill();

    // Save the initial background.
    back = ctx.getImageData(0, 0, 30, 30);

    // Paint the starfield.
    stars();

    // Draw space ship.
    makeShip();
  }

  // Play the game until the until the game is over.
  gameLoop = setInterval(doGameLoop, 16);

  // Add keyboard listener.
  window.addEventListener('keydown', whatKey, true);

}

// Paint a random starfield.
function stars() {

  // Draw 50 stars.
  for (i = 0; i <= 50; i++) {

    // Get random positions for stars.
    var x = Math.floor(Math.random() * 846);
    var y = Math.floor(Math.random() * 766);

    // Make the stars white
    ctx.fillStyle = "white";

    // Give the ship some room by painting black stars.
    // if (x < 30 || y < 30) ctx.fillStyle = "black";

    // Draw an individual star.
    ctx.beginPath();
    ctx.arc(x, y, 3, 0, Math.PI * 2, true);
    ctx.closePath();
    ctx.fill();

    // Save black background.
    oldBack = ctx.getImageData(0, 0, 30, 30);
  }
}

// Create the ship
function makeShip() {

    // Draw saucer bottom.
    var shipImage = new Image();
    shipImage.src = "../assets/pigLaugh.png";

    /*
    ctx.beginPath();
    ctx.moveTo(28.4, 16.9);
    ctx.bezierCurveTo(28.4, 19.7, 22.9, 22.0, 16.0, 22.0);
    ctx.bezierCurveTo( 9.1, 22.0,  3.6, 19.7,  3.6, 16.9);
    ctx.bezierCurveTo( 3.6, 14.1,  9.1, 11.8, 16.0, 11.8);
    ctx.bezierCurveTo(22.9, 11.8, 28.4, 14.1, 28.4, 16.9);
    ctx.closePath();
    ctx.fillStyle = "rgb(222, 103, 0)";
    ctx.fill();
    */

    // Draw saucer top.
    /*
    ctx.beginPath();
    ctx.moveTo(22.3, 12.0);
    ctx.bezierCurveTo(22.3, 13.3, 19.4, 14.3, 15.9, 14.3);
    ctx.bezierCurveTo(12.4, 14.3,  9.6, 13.3,  9.6, 12.0);
    ctx.bezierCurveTo( 9.6, 10.8, 12.4,  9.7, 15.9,  9.7);
    ctx.bezierCurveTo(19.4,  9.7, 22.3, 10.8, 22.3, 12.0);
    ctx.closePath();
    ctx.fillStyle = "rgb(51, 190, 0)";
    ctx.fill();
    */

    // Save ship data.
    ship = shipImage; //ctx.getImageData(0, 0, 30, 30);

    // Erase it for now.
    ctx.putImageData(oldBack, 0, 0);

}

// This loops through the whole game
function doGameLoop() {
  // Put old background down to erase shipe.
  ctx.putImageData(oldBack, oldShipX, oldShipY);

  // Put ship in new position.
  ctx.putImageData(ship, shipX, shipY);
}

// Get key press.
function whatKey(evt) {

    // Flag to put variables back if we hit an edge of the board.
    var flag = 0;

    // Get where the ship was before key process.
    oldShipX = shipX;
    oldShipY = shipY;
    oldBack = back;

    switch (evt.keyCode) {

    // Left arrow.
    case 37:
        shipX = shipX - 30;
        if (shipX < 0) {
            // If at edge, reset ship position and set flag.
            shipX = 0;
            flag = 1;
        }
        break;

    // Right arrow.
    case 39:
        shipX = shipX + 30;
        if (shipX > 270) {
            // If at edge, reset ship position and set flag.
            shipX = 270;
            flag = 1;
        }
        break;

    // Down arrow
    case 40:
        shipY = shipY + 30;
        if (shipY > 270) {
            // If at edge, reset ship position and set flag.
            shipY = 270;
            flag = 1;
        }
        break;

    // Up arrow 
    case 38:
        shipY = shipY - 30;
        if (shipY < 0) {
            // If at edge, reset ship position and set flag.
            shipY = 0;
            flag = 1;
        }
        break;

    }

    // If flag is set, the ship did not move.
    // Put everything back the way it was.
    if (flag) {
        shipX = oldShipX;
        shipY = oldShipY;
        back = oldBack;
    } else {
        // Otherwise, get background where the ship will go
        // So you can redraw background when the ship
        // moves again.
        back = ctx.getImageData(shipX, shipY, 30, 30);
    }
}

