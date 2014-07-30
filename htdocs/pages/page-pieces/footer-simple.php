<link rel="stylesheet" type="text/css" href="../css/footer.css">
<link rel="stylesheet" href="../libs/font-awesome-4.1.0/css/font-awesome.min.css">
<script>
	function backClicked() {
		history.go(-1);
	}

	function enter() {
		document.location.href=home;
	}
	var home = "connected-customer_main-page.php";
</script>
<div id="footer">
	<div class="menu-bar">
		<div class="menu-bar-wrapper">
			<a href="#" onclick="backClicked()"><div id="placeholder"><div class="back">< BACK</div></div></a>
			<a href="#" onclick="enter()"><div id="placeholder1"><div class="back"><i class="fa fa-university"></i></div></div></a>
			<h1 id="title"></h1>
			<div class="menu-button" onclick="menu_button()">
				<span class="white-line-container">
					<div class="white-line"></div>
					<div class="white-line"></div>
					<div class="white-line"></div>
				</span>
			</div>
		</div>
		<div class="nav-dropdown">
			<ul>
				<li>TRANSACTION&nbsp</li>
				<li>MEET WITH A BANKER&nbsp</li>
				<li>ACCOUNT INFO&nbsp</li>
				<li>LOAN INFO&nbsp</li>
				<li>CREDIT CARD&nbsp</li>
				<li>PROBLEM RESOLUTION&nbsp</li>
				<li>FINANCIAL ADVICE&nbsp</li>
				<li>FINANCIAL HOW-TO'S&nbsp</li>
				<li>SAFETY DEPOSIT BOX&nbsp</li>
				<li>LOCAL EVENT&nbsp</li>
				<li>PLAY A GAME&nbsp</li>
				<li>FUN FACT&nbsp</li>
			</ul>
		</div>
	</div>
</div>
