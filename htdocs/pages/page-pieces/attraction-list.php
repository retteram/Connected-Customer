<?php 
	$json = file_get_contents("../json/attraction-list.json");
	$list = json_decode($json);
?>
<script type="text/javascript" src="../libs/iscroll-4/src/iscroll.js"></script>
<script>
	/* Scrolling Functions */
	var myScroll;
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
				<li class=<?php echo '"'.$key.'"';?>>
				<div clas="class-color"></div>
				<div class="list-text">
					<h2>
						<?php echo $val->title; ?>
					</h2>
					<p>
						<?php echo $val->content; ?>
					</p>
				</div>
				<div class="list-image">
					<img src=<?php echo'"'.$val->image. '"'; ?> height="100%" />
				</div>
				</li>
				
			<?php } ?>
		<?php } ?>
		</ul>
	</div>
</div>
