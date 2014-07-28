<style>
#factHolder{
}

.fact{
	display:none;
}


.display-area{
	width:800px;
	height:700px;
	border-radius:8px;
	background-color:white;
	border:solid 2px #37a85c;
	margin:90px auto 0px auto;
}

.did-you-know{
	text-align:center;
	display:block;
	font-family:helvetica;
	font-weight:900;
	font-size:70px;
	margin:90px auto 0px auto;
}

#line {
	background-color:#D1D2D4;
	width:700px;
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
	margin:15px auto 0px auto;
	border-radius: 8px;
	color:white;
	width:250px;
	height:60px;
	background-color:#37a85c;
	cursor:pointer;
	text-align:center;
	line-height:7px;
	padding-top:1px;
}

#random h1{
	color:white;
	font-size:25px;
	font-weight:900;
}

#random:hover{
	background-color:#3CB666;
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
<div id="random" onclick="generateRand()"><h1>NEW JOKE</h1>(TAP HERE)</div>