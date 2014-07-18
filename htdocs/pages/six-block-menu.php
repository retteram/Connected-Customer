<?php
	$json = file_get_contents("../json/menu_items.json");
	$menuitems = json_decode($json, true);
?>
<link href="../css/six-block-menu.php" rel="stylesheet">
<ul class="content-list">
	<?php
		// Since we're pulling the info for these items from a separate file,
		// this loop will run through the json array and create the items.
	$j = -1;		// The class names alternate: left side is wrapper1, 
					// right side is wrapper2. This $j ensures that.
	foreach($menuitems as $iname => $ival){
		$j++; 
	?>
		<li name=<?php echo '"' . $ival['name'] . '"'; ?> >
			<div class=<?php echo '"wrapper'. (($j%2)+1) . ' well"';?> >
				<img class="option-image" src=<?php echo $ival['image'];?> />
				<h3 class="option-title"><?php echo $ival['title'];?></h3>
				<p class="option-content"><?php echo $ival['body'];?></p>
			</div>
		</li>
	<?php } ?>
</ul>
