<!DOCTYPE html>
<html>
<head>
	<title>Addcard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<script>
	function addcard(){
		document.getElementById('inputadd01').style.display="block";
		document.getElementById('head0-app').style.display="none";
		document.getElementById('head-app').innerHTML = "Add Card"
	}
	function numpad101(){
		document.getElementById('numpad101').style.display="block";
	}
	function num1(){
		document.getElementById('tap-r-input001').innerHTML = "1";
	}
	</script>
</head>
<body class="animated bounceInRight">
	<div class="body-app">
	<div class="head-app" id="head-app"><a href="index.php" class="back001"><fa></fa></a>My Cards</div>
	<div class="head0-app" id="head0-app">
		<div class="box-text-h2">
			<div class="box-text-h2-01"><fa> </fa>  Green level</div>
			<div class="box-text-h2-02">STARS YOU'VE EARNED</div>
			<div class="box-text-h2-03">101</div>
			<div class="box-text-h2-04">Your membership expiry date is 2017-03-29,<br>49 more Stars to reach Gold level.</div>
		</div>
		<a href="benefits.php"><div class="btn-h2">Rewards</div></a>
	</div>
	<div class="box-addcard"><img src="img/addcard.png">
	<button type="button" class="btnnnnn" onclick="addcard()"></button>
		<div class="box-input-addcard animated flipInX" id="inputadd01">
		<div class="tapp-dum"></div>
			<div class="tap-l">
				<div class="tap-l-logo"><img src="img/logostar.png" width="100%;"></div>
			</div>
			<div class="tap-r">
				<div class="tap-r-text">Enter the details found at the back of your Card</div>
				<input class="tap-r-input001" id="tap-r-input001" type="text" placeholder="  Starbucks Card Number" onfocus="numpad101()">
				<input class="tap-r-input002" onfocus="numpad101()" placeholder="  Security Code">
			</div>
		</div>
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

	<div class="numpad101 animated bounceInUp" id="numpad101">
		<div class="pad1001"><button type="button" class="btn-pad1001" value="1" onclick="num1()"></button>1</div>
		<div class="pad1001"><button type="button" class="btn-pad1001" value="2" onclick="num1()"></button>2<br><fs36>ABC</fs36></div>
		<div class="pad1001"><button type="button" class="btn-pad1001" value="3" onclick="num1()"></button>3<br><fs36>DEF</fs36></div>
		<div class="pad1001"><button type="button" class="btn-pad1001" value="4" onclick="num1()"></button>4<br><fs36>GHI</fs36></div>
		<div class="pad1001"><button type="button" class="btn-pad1001" value="5" onclick="num1()"></button>5<br><fs36>JKL</fs36></div>
		<div class="pad1001"><button type="button" class="btn-pad1001" value="6" onclick="num1()"></button>6<br><fs36>MNO</fs36></div>
		<div class="pad1001"><button type="button" class="btn-pad1001" value="7" onclick="num1()"></button>7<br><fs36>PQRS</fs36></div>
		<div class="pad1001"><button type="button" class="btn-pad1001" value="8" onclick="num1()"></button>8<br><fs36>TUV</fs36></div>
		<div class="pad1001"><button type="button" class="btn-pad1001" value="9" onclick="num1()"></button>9<br><fs36>WXYZ</fs36></div>
		<div class="pad1002"><button type="button" class="btn-pad1001" onclick="num1()"></button>.<br></div>
		<div class="pad1001"><button type="button" class="btn-pad1001" value="0" onclick="num1()"></button>0<br></div>
		<div class="pad1002"><div class="box-backkk"><img src= "img/addback.png" width="100%;"></div></div>
	</div>
	</div>
</body>
</html>