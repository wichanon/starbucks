<!DOCTYPE html>
<html>
<head>
	<title>Starbucks</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script>
		var x=1;
		function popmanage(){
			document.getElementById('popup-manage01').style.display="block";
			document.getElementById('black-bg').style.display="block";
		}

		function canpop01(){
			document.getElementById('black-bg').style.display="none";
			document.getElementById('popup-manage01').style.display="none";
		}

		function cardscan(){
			if(x%2==1){
				document.getElementById('card-scan01').style.display="block";
				document.getElementById('cards-01').style.background= "none";
				document.getElementById('head0-app').style.display="none";
				document.getElementById('cards-box-touch').style.bottom="-90px";
				document.getElementById('cards-box-touch02').style.bottom="-90px";
				document.getElementById('text-money01').style.display="none";
				document.getElementById('box-btn-01').style.display="none";
				x++;
			}
			else{
				document.getElementById('card-scan01').style.display="none";
				document.getElementById('cards-01').style.backgroundImage=" url('img/card01.png')";
				document.getElementById('head0-app').style.display="block";
				document.getElementById('cards-box-touch').style.bottom="-39px";
				document.getElementById('cards-box-touch02').style.bottom="-39px";
				document.getElementById('text-money01').style.display="block";
				document.getElementById('box-btn-01').style.display="block";
				x++;
			}
			
		}
	</script>
	
</head>
<body class="animated bounceInLeft">
<div class="body-app">
	<div class="head-app">My Cards</div>
	<div class="head0-app animated bounceInRight" id="head0-app">
		<div class="box-text-h2">
			<div class="box-text-h2-01"><fa> </fa>  Green level</div>
			<div class="box-text-h2-02">STARS YOU'VE EARNED</div>
			<div class="box-text-h2-03">101</div>
			<div class="box-text-h2-04">Your membership expiry date is 2017-03-29,<br>49 more Stars to reach Gold level.</div>
		</div>
		<a href="benefits.php"><div class="btn-h2">Rewards</div></a>
	</div>
	<div class="cards-01 animated bounceInRight" id="cards-01">

		<div class="cards-box-touch02" id="cards-box-touch02"></div>
		<button class="cards-box-touch" id="cards-box-touch" onclick="cardscan()"></button>
		<div class="card-scan01 animated flipInX" id="card-scan01">
			<div class="tapp-dum"></div>
			<div class="tap-l">
				<div class="tap-l-logo"><img src="img/logostar.png" width="100%;"></div>
			</div>
			<div class="tap-r">
				<div class="tap-r-text-index">Your Starbucks Card number is :<br>6080152441596222</div>
				<div class="barcode010"><img src="img/bacode.png" width="100%;"></div>
				
			</div>
		</div>
	</div>
	<div class="text-money01 animated bounceInRight" id="text-money01">
		<div class="text-money01-01"><fs56>Baht 205.00</fs56><br>As of 2560-02-22 19:43</div>
		<div class="text-money01-02">Registered<br>6080152441596222</div>
	</div>
	<div class="box-btn-01 animated bounceInRight" id="box-btn-01">
		<button type="button" class="btn-01-01" onclick="popmanage()">Manage</button>
		<a href="addcard.php"><button class="btn-01-02">Add a Card</button></a>
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
	<div id="popup-manage01" class="animated bounceInUp">
		<button class="box-text-pop01">Refresh Balance</button>
		<a href="history.php"><button class="box-text-pop02">Teansaction History</button></a>
		<button class="box-text-pop03" type="button" onclick="canpop01()">Cancel</button>
	</div>	
</div>
</body>
</html>