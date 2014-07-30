<?php 
	$json = file_get_contents("../json/attraction-list.json");
	$list = json_decode($json);
?>
<link rel="stylesheet" href="../css/attraction-list.css"></link>
<div id="list"></div>
<div class="attractionList">
	<?php foreach($list as $key => $value){ ?>
		<?php foreach($value as $val) { ?>
			<div class=<?php echo $key;?>>
				<h2>
					<?php echo $val->title; ?>
				</h2>
				<p>
					<?php echo $val->content; ?>
				</p>
			</div>
		<?php } ?>
	<?php } ?>
</div>
