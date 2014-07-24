<script src="../js/header.js" type="text/javascript"></script>
<script> $(function() { set_clock(); setInterval(function(){set_clock();}, 1000); }); </script>
<link rel="stylesheet" href="../css/header.css">
<div id="header">
	<div id="clock">
		<span class="date"></span>
		<span class="time">
			<span id="hourmin">0:00</span>
			<span id="am_pm">am</span>
		</span>
		<span class="dayofweek"></span>
	</div>
	<div class="separator"></div>
</div>