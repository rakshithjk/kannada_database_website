<?php
	session_start();
	$sess = 0;
	print_r($_SESSION);
	if(isset($_SESSION['signed_in']))
	{
		if(($_SESSION['signed_in'])==true)
		{
			$sess =1;
			
		}
	}
?> 

<!DOCTYPE html>
<html>
<head>
	
	<title>Kannada Database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header id="litbg" style="background-image: url(literature/bg.jpg);
	width:100%;height:500px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;">

<div class="row">
	<div class="logo">
		
			<img src="img/logo.png">
		
	</div>
<ul class="main-nav" >
	    <li><a  href="index.html"><span style="color:red;">HOME</span></a></li>
		<li><a  href="movies.php"><span style="color:red;">MOVIES</span></a></li>
		<li><a class="current" href="literature.php"><span style="color:red;">LITERATURE</span></a></li>
		<li><a href="songs.php"><span style="color:red;">SONGS</span></a></li>
		<li><a href="forum.php"><span style="color:red;">FORUM	</span></a></li>
				<li class="login" id="login" style="color:red;visibility:visible;"><a href="login.php"><span style="color:red;font-size:20px;">SIGN-IN/REGISTER</span></a></li>
		<li class="logout" id="logout" style="color:red;visibility:hidden;"><a href="logout.php"><span style="color:red;font-size:20px;">LOGOUT</span></a></li>
	</ul>	
<script>
var a = "<?php echo $sess; ?>";	
if (a == 1)
{
	var lin = document.getElementById("login").style;
	var lot = document.getElementById("logout").style;
	lin.visibility ="hidden";
	lin.display="none";
	lot.visibility="visible";
}
if ( a==0 )
{
	var lin = document.getElementById("login").style;
	var lot = document.getElementById("logout").style;
	lin.visibility ="visible";
	lot.visibility="hidden";
	lot.display="none";
}

</script>	

</div>
	<div class="hero" style="margin-top:20px;">
		<h1 style="color:red;margin-top:-150px;"><pre>			Welcome to Literature Section</pre></h1> <br><h3 ><pre><span style="color:yellow;">	        ಸಾಹಿತ್ಯ  ವಿಭಾಗಕ್ಕೆ ಸುಸ್ವಾಗತ</span></pre></h3>

		</div>
	</div>
</div>
</header>
<section id="boxes">
<div class="container" id="list_mov" >
	<p align="center" style="font-size: 35px; font-family: Microsoft Yi Baiti; margin-top: 20px; color: #999;">"LIST OF BOOKS- ಸಾಹಿತ್ಯಗಳ ಪಟ್ಟಿ"</p>
	<br>
	<hr width="30%" style="color:#ffffff4d; margin-left: 33%;">
	<br>
	
	<br>
	<hr style="color:#ffffff4d;">
	<br>
	<div class="box">
		<a href="literature\karvalo\karvalo.php"  style="text-decoration:none;"><img src="literature\karvalo.jpg" style="height:200px;width:200px;">
		<h4>ಕರ್ವಾಲೊ <br>Karvalo</h4>
		
	</div>
	<div class="box" >
		<a href="literature\malemaduma\malemaduma.php"  style="text-decoration:none;"><img src="literature\malemaduma.jpg" style="height:200px;width:200px;"></a>
		<h4>ಮಲೆಗಳಲ್ಲಿ ಮದುಮಗಳು<br>MALEGALALI MADUMAGALU</h4>
		<p class="norman" style="color: #666;"></p>
	</div>
	
	<div class="box">
		<a href="literature\chidambara\chidambara.php"  style="text-decoration:none;"><img src="literature\chidambara.jpg" style="height:200px;width:200px;">
		<h4>ಚಿದಂಬರ ರಹಸ್ಯ <br>Chidambara Rahasya</h4>
		
	</div>
	
	<div class="box">
		<a href="literature\mookajji\mookajji.php"  style="text-decoration:none;"><img src="literature\mookajji.jpg" style="height:200px;width:200px;">
		<h4>ಮೂಕಜ್ಜಿಯ ಕನಸುಗಳು <br>Mookajjiya Kanasugalu</h4>
		
	</div>
	<div class="box" >
		<a href="literature\kanooru\kanooru.php"  style="text-decoration:none;"><img src="literature\kanooru.jpg" style="height:200px;width:200px;">
		<h4>ಕಾನೂರು ಹೆಗ್ಗಡಿತಿ <br>Kanooru Heggadithi</h4>
	</div>
	<div class="box" >
		<a href="literature\parva\parva.php"  style="text-decoration:none;"><img src="literature\parva.jpg" style="height:200px;width:200px;">
		<h4>ಪರ್ವ <br>Parva</h4>
	</div>
	<div class="box" >
		<a href="literature\mandra\mandra.php"  style="text-decoration:none;"><img src="literature\mandra.jpg" style="height:200px;width:200px;">
		<h4> ಮಂದ್ರ <br>Mandra</h4>
	</div>
	<div class="box" >
		<a href="literature\grihabanga\grihabanga.php"  style="text-decoration:none;"><img src="literature\grihabanga.jpg" style="height:200px;width:200px;">
		<h4>ಗೃಹಭಂಗ <br>Grihabhanga</h4>
	</div>
	<div class="box" >
		<a href="literature\jugaari\jugaari.php"  style="text-decoration:none;"><img src="literature\jugaari.jpg" style="height:200px;width:200px;">
		<h4>ಜುಗಾರಿ ಕ್ರಾಸ್ <br>Jugaari Cross</h4>
	</div>
	<div class="box" >
		<a href="literature\bettada\bettada.php"  style="text-decoration:none;"><img src="literature\bettada.jpg" style="height:200px;width:200px;">
		<h4>ಬೆಟ್ಟದ ಜೀವ <br>Bettada Jeeva</h4>
	</div>
	<div class="box" >
		<a href="literature\aavarana\aavarana.php"  style="text-decoration:none;"><img src="literature\aavarana.jpg" style="height:200px;width:200px;"></a>
		<h4> ಆವರಣ <br>Aavarana</h4>
	</div>
	<div class="box" >
		<a href="literature\kiragoorina\kiragoorina.php"  style="text-decoration:none;"><img src="literature\kiragoorina.jpg" style="height:200px;width:200px;">
		<h4>ಕಿರಗೂರಿನ ಗಯ್ಯಾಳಿಗಳು <br>Kiragoorina Gayyaaligalu </h4>
	</div>
	
	
	
</div>

</body>



</header>