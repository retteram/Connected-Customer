function generateRandomFact(first, last) {
		return Math.floor(Math.random() * (last - first + 1)) + first;
	}

function generateRand (){

	
	$(".showFact").removeClass().addClass('fact');

	var facts = document.getElementsByClassName("fact");

	facts[generateRandomFact(0,facts.length-1)].className = "showFact";
}