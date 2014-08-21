<?php 
	$json = file_get_contents("../json/attraction-list.json");
	$list = json_decode($json);
?>
<link rel="stylesheet" href="../css/attraction-list.css"></link>
<div id="list"></div>

<div id="screen" onclick="closeDirections()"></div>
<div id="popup">
	<iframe width="600" height="450" frameborder="0" style="border:0"
	  src="https://www.google.com/maps/embed/v1/place?key=API_KEY&q=Space+Needle,Seattle+WA">
	</iframe>
</div>

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
						<p class="read-more"> Read More </p>
					</div>
					<div class="list-image" onclick="enlarge(this)">
						<img src=<?php echo '"'.$val->image.'"'; ?> height="100%" />
					</div>
					<p class="infobox">
						<?php echo strtoupper($val->distance); ?>
					</p>
					<a class="directions-button" onclick=<?php echo '"openDirections(\''.$val->title.'\')"'?>>
						DIRECTIONS
					</a>
				</li>
			<?php } ?>
		<?php } ?>
		</ul>
	</div>
</div>
