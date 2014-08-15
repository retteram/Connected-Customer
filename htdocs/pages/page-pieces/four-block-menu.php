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
			<li class=<?php echo '"'.$ival['type'].'"'; ?> >
			 <div class=<?php echo '"li-container '.$sideclass.' well"';?> 
			 		href=<?php echo '"'.$ival['link'].'"'; ?> >
				<img class="option-image" src=<?php echo $ival['image'];?> />
				<div class="option-text-holder">
					<h3 class="option-title"><?php echo $ival['title'];?></h3>
					<p class="option-content"><?php echo $ival['body'];?></p>
				</div>
			</div>
		</li>
	<?php } ?>
</ul>
