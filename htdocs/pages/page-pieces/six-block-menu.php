<?php
	$json = file_get_contents($carouselpage);
	$menuitems = json_decode($json, true);
?>
<script>
	$(function(){
		$(".well").click(function(){
			document.location.href=$(this).attr('href'); 
		});
	});
</script>
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
			 <div class=<?php echo '"li-container '.$sideclass.' well"';?> 
			 		href=<?php echo '"'.$ival['link'].'"' ?> >
				<img class="option-image" src=<?php echo $ival['image'];?> />
				<div class="option-text-holder">
					<h3 class="option-title"><?php echo $ival['title'];?></h3>
					<p class="option-content"><?php echo $ival['body'];?></p>
				</div>
			</div>
		</li>
	<?php } ?>
</ul>
