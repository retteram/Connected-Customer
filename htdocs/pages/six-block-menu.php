<?php

	$json = file_get_contents("../json/menu_item_page".$carouselpage.".json");
	$menuitems = json_decode($json, true);
?>
<link href="../css/six-block-menu.css" rel="stylesheet">
<ul class="content-list">
	<?php
		// Since we're pulling the info for these items from a separate file,
		// this loop will run through the json array and create the items.
	$j = -1;
	foreach($menuitems as $iname => $ival){
		$j++;

		// Based on whether $j is odd/even is how we know which
		// 'sideclass' (left or right) to assign.
		$sideclass = "";
		if($j%2 == 0)
			$sideclass = "left";
		else
			$sideclass = "right";
	?>
		<li class=<?php echo '"'.$ival['type'].'"' ?> >
			<a href=<?php echo '"'.$ival['link'].'"' ?> >
				<div class=<?php echo '"li-container '.$sideclass.' well"';?> >
					<img class="option-image" src=<?php echo $ival['image'];?> />
					<div class="option-text-holder">
						<h3 class="option-title"><?php echo $ival['title'];?></h3>
						<p class="option-content"><?php echo $ival['body'];?></p>
					</div>
				</div>
			</a>
		</li>
	<?php } ?>
</ul>
