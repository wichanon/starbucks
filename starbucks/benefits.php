<!DOCTYPE html>
<html>
<head>
	<title>Benefits</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<script>
	function popac(){
			document.getElementById('popup-manage02').style.display="block";
			document.getElementById('black-bg').style.display="block";
		}
		function canpop01(){
			document.getElementById('black-bg').style.display="none";
			document.getElementById('popup-manage02').style.display="none";
		}
	</script>
</head>
<body class="animated bounceInRight">
	<div class="body-app02">
		<div class="head-app"><a href="index.php" class="back001"><fa></fa></a>My Benefits</div>
		<div class="box-drink12">
			<div class="img-cup01"><img src="img/cup01.png"></div>
			<div class="text-cup02">
				<div class="text-cup02-02">12 Drinks Purchase Until Your Next Free Tall Drink</div>
				<div class="tang112">
					<div class="nui-tang112"></div>
					<div class="text10110">1/12 (Expires In 2017-05-18)</div>
				</div>
			</div>
		</div>
		<div class="select-filter02">
			<div class="filter02-01">Filter by :</div>
			<button type="button" class="filter02-02" onclick="popac()">
				Active  <fa>  </fa>
			</button>
		</div>
		<div class="text003">You are currently eligible to redeem the following reward(s) :</div>
		<div class="line-green"></div>

		<div class="img-cup02"><img src="img/cup02.png"></div>

		<div class="text004">You don't have any earned Rewards at the moment.</div>	
		<div class="line-green02"></div>
		<div class="text005">Collect Stars, get more rewards with your registered Starbucks Card and earn 1 Ster for every THB 100 purchase.<br>For a complete information of My Starbucks<br> Rewards, visit
		<br><a href="#">http://www.starbuckscard.in.th/cards/</a>
		</div>

		<div class="menu-tap-01">
		<div class="menu-lise-t-box">
			<div class="li-menu01">
				<div class="icon-menu01"><fa></fa></div>
				<div class="text-menu01">HOME</div>
			</div>
			<a href="index.php"><div class="li-menu01 active_menu">
				<div class="icon-menu01 active_menu"><fa></fa></div>
				<div class="text-menu01 active_menu">CARDS</div>
			</div>
			</a>
			<div class="li-menu01">
				<div class="icon-menu01"><fa></fa></div>
				<div class="text-menu01">STORES</div>
			</div>
			<div class="li-menu01">
				<div class="icon-menu01"><fa></fa></div>
				<div class="text-menu01">MESSAGES</div>
			</div>
			<div class="li-menu01">
				<div class="icon-menu01"><fa></fa></div>
				<div class="text-menu01">MORE</div>
			</div>

		</div>
	</div>	
	<div id="black-bg"></div>
	<div id="popup-manage02" class="animated bounceInUp">
		<button class="box-text-pop01">Active</button>
		<a href="#"><button class="box-text-pop02">Redeemed</button></a>
		<a href="#"><button class="box-text-pop02">Expired</button></a>
		<button class="box-text-pop04" type="button" onclick="canpop01()">Cancel</button>
	</div>
	</div>
</body>
</html>