<style>
.fact{
	display:none;
}

.showFact{
	display:block;
}
</style>

<script type="text/javascript" src="../js/display-fact.js"></script>

<div id="factsHolder">
	<?php
		$json = file_get_contents("../json/facts.json");
		$facts = json_decode($json, true);

		
		foreach ($facts as $value) {
			echo "<div class='fact'>$value</div>";
		}
		// echo $facts[$val];
	?>


</div>
<button id="random" onclick="generateRand()">Generate Random Fact</button>