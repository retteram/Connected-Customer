
<div>
	<?php
		$json = file_get_contents("../json/facts.json");
		$facts = json_decode($json, true);
	?>
	<?php
		foreach($facts as $value){
			echo "Val: ".$value."<br>";
		}
	?>
</div>