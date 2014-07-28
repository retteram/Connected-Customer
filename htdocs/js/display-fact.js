// This function just generates a number between 'first' and 'last'
function generateRandomNumber(first, last) {
	return Math.floor(Math.random() * (last - first + 1)) + first;
}

var generatedFacts = [];
function generateRand (){
	// First we need to find all the <div>s with 'showFact' as a
	// a class and change them back to 'fact'
	$(".showFact").removeClass().addClass('fact');

	// Then, get all the 'fact' class <div>s
	var facts = document.getElementsByClassName("fact");
	var factslength = facts.length;

	// Use the 'generateRandomNumber' function to create a number
	// that is between 0 and the total number of 'facts' - 1
	var randomnumber = generateRandomNumber(0, factslength-1);

	// Check if we've already chosen that number, keep generating
	// numbers until we get a new one.
	if(generatedFacts.length > 0){
		while(generatedFacts.indexOf(randomnumber) != -1){
			randomnumber = generateRandomNumber(0, factslength-1);
		}
	}

	// Set the class of the <div> at the index of the random number
	// to 'showFact' instead of 'fact'.
	facts[randomnumber].className = "showFact";

	// Record the randomly generated index number that we used.
	generatedFacts.push(randomnumber);

	// If we have gone through the whole list of facts, then reset
	// the list of 'generatedFacts'.
	if(generatedFacts.length == facts.length){
		generatedFacts = [randomnumber];
	}
}
