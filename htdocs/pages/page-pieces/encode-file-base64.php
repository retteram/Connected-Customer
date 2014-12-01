<?php
	if(isset($_GET["filename"])){
		$path = $_GET["filename"];
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);

		$base64 = $data;
		if($type == "jpg" && $type == "jpeg" && $type == "png" && $type == "bmp" && $type == "gif"){
			$base64 = 'data:image/' . $type . ';base64,' .base64_encode($data);
		}
		echo base64_encode($base64);
	} else {
		echo "FAIL";
	}
?>