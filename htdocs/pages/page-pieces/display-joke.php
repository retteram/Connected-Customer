<style>
#factHolder{
}

.fact{
	display:none;
}


.display-area{
	width:900px;
	height:700px;
	border-radius:8px;
	background-color:white;
	border:solid 2px #37a85c;
	margin-top:100px;
	margin-left:90px;
}

.did-you-know{
	text-align:center;
	display:block;
	font-family:helvetica;
	font-weight:900;
	font-size:70px;
	margin-top:90px;
}

#line {
	background-color:#D1D2D4;
	width:800px;
	height:2px;
	margin-top:30px;
	margin-left:50px;
}

.showFact{
	margin-top:40px;
	padding:0px 30px 0px 30px;
	display:block;
	background-color:;
	color:white;
	font-family:helvetica;
	font-weight: 900;
	color:#37a85c;
	font-size:50px;

}

.fact-container{
	
}

#random {
}


</style>

<script type="text/javascript" src="../js/display-fact.js"></script>


<div class="fact-container">


	<div class="display-area">

	<div class="did-you-know">
	HAVE A LAUGH
	</div>
	<div id="line"></div>
	<div id="factsHolder">
		<?php
			$json = file_get_contents("../json/jokes.json");
			$facts = json_decode($json, true);

		
			foreach ($facts as $value) {
				echo "<div class='fact'>$value</div>";
			}
			// echo $facts[$val];
		?>
	</div>
	</div>

</div>
<button id="random" onclick="generateRand()">Generate A Random Joke</button>