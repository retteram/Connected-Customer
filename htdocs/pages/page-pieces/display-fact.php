<style>
#factHolder{
}

.fact{
	display:none;
}


.did-you-know{
	
}
.showFact{
	padding:20px;
	display:block;
	height:400px;
	background-color:blue;
	color:white;
	font-family:helvetica;
	font-weight: 900;
	color:#37a85c;
	font-size:50px;
}

.fact-container{
	
}

.display-area{
	
}

</style>

<script type="text/javascript" src="../js/display-fact.js"></script>


<div class="fact-container">

	<div class="did-you-know">
	<div class="display-area">
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
	</div>
	</div>

</div>
<button id="random" onclick="generateRand()">Generate Random Fact</button>