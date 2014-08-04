<?php 
	$json = file_get_contents("../json/attraction-list.json");
	$list = json_decode($json);
?>
<script>
	/* Scrolling Functions */
	// var myScroll;
	function loaded() {
		myScroll = new iScroll('wrapper');
	}

	document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
	document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);
	/* END Scrolling Functions */
</script>
<link rel="stylesheet" href="../css/attraction-list.css"></link>
<div id="list"></div>
<div id="wrapper">
	<div id="scroller">
		<ul class="attraction-list">
		<?php foreach($list as $key => $value){ ?>
			<?php foreach($value as $val) { ?>
				<li class=<?php echo '"'.$key.' attraction unchecked"';?> >
					<div class="left-color"></div>
					<div class="list-close" onclick="shrink(this)">X</div>
					<div class="list-text">
						<h2 class="heading"> <?php echo $val->title; ?> </h2>
						<div class="list-line"></div>
						<p class="paragraph"> <?php echo $val->content; ?> </p>
					</div>
					<div class="list-image" onclick="enlarge(this)">
						<img src=<?php echo'"'.$val->image.'"'; ?> height="100%" />
					</div>
				</li>
			<?php } ?>
		<?php } ?>
		</ul>
	</div>
</div>
