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

<header id="moviebg">

<div class="row">
	<div class="logo">
		
			<img src="img/logo.png">
		
	</div>
	<ul class="main-nav" >
	    <li><a  href="index.php"><span style="color:yellow;">HOME</span></a></li>
		<li><a  class="current" href="movies.php"><span style="color:white;">MOVIES</span></a></li>
		<li><a href="literature.php"><span style="color:#ccff33;">LITERATURE</span></a></li>
		<li><a href="songs.php"><span style="color:red;">SONGS</span></a></li>
		<li><a href="forum.php"><span style="color:lightgreen;">FORUM	</span></a></li>
		<li class="login" id="login" style="color:#ff00ff;visibility:visible;"><a href="login.php"><span style="color:#ff00ff;">SIGN-IN/REGISTER</span></a></li>
		<li class="logout" id="logout" style="color:#ff00ff;visibility:hidden;"><a href="logout.php"><span style="color:#ff00ff;">LOGOUT</span></a></li>
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
	<div class="hero">
		<h1><pre>			Welcome to Movies Section</pre></h1> <br><h3 ><pre><span style="color:yellow;">        ಚಲನಚಿತ್ರ  ವಿಭಾಗಕ್ಕೆ ಸುಸ್ವಾಗತ</span></pre></h3>

		</div>
	</div>
	

</header><br><br>
<div>
	<ul style="background-color:white" >
    <center><li style="display: inline;"><input type="button"  onclick ="book_list()" id="plot" value="BOOK TICKETS" style="display:inline-block;margin-left: 20px;background-color: #ffbf00;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	<li  style="display: inline;"><input type="button" onclick ="movie_list()" id="plot" value="WATCH ONLINE/DOWNLOAD" style="display:inline-block;margin-left: 20px;background-color: #ffbf00;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	</center>
	</ul>
	
</div>
<section id="boxes" >
<div id="list_bk" style="visibility:hidden;" >
<br>
<br>
<pre><h2 style="color:red;">              Partners:</h2></pre>
<div  class="container"  >
	<div class="box">
		<a href="https://www.paytm.com"><img src="movies/paytm.png" style="height:100px;width:200px;border:1px solid black;"></a>
	</div>
	<div class="box">
		<a href="https://www.bookmyshow.com"><img src="movies/bookmyshow.jpg" style="height:100px;width:200px;border:1px solid black;"></a>
	</div>
	<div class="box">
		<a href="https://www.ticketnew.com"><img src="movies/ticketnew.jpg" style="height:100px;width:200px;border:1px solid black;"></a>
	</div>
</div>
</section>
<section id="boxes">
<div class="container" id="list_mov" style="visibility:hidden;">
	<p align="center" style="font-size: 35px; font-family: Microsoft Yi Baiti; margin-top: 20px; color: #999;">"LIST OF MOVIES-ಚಲನಚಿತ್ರಗಳ ಪಟ್ಟಿ"</p>
	<br>
	<hr width="30%" style="color:#ffffff4d; margin-left: 33%;">
	<br>
	
	<br>
	<hr style="color:#ffffff4d;">
	<br>
	<div class="box" >
		<a href="movies/vishnuvardhana/vishnuvardhana.php"><img src="movies/vishnuvardhana.jpg" style="height:200px;width:200px;"></a>
		<h4>VISHNUVARDHANA</h4>
		<p class="norman" style="color: #666;"></p>
	</div>
	<div class="box">
		<a href="movies/raajkumaara/rajkumaara.php" style="text-decoration:none;"><img src="movies/rajakumara.jpg" style="height:200px;width:200px;">
		<h4>RAJKUMAARA</h4>
		
	</div>
	<div class="box">
		<a href="movies/gbsm/gbsm.php" style="text-decoration:none;"><img src="movies/gbsm.jpg" style="height:200px;width:200px;border:1px solid black;">
		<h4>GODHI BANNA-SADHARANA MAIKATTU</h4>
		
	</div>
	<div class="box">
		<a href="movies/optnalm/optnalm.php" style="text-decoration:none;"><img src="movies/oprtn-almla.jpg" style="height:200px;width:200px;">
		<h4>OPERATION ALAMELAMMA</h4>
		
	</div>
	<div class="box" >
		<a href="movies/kirik-party/kp.php" style="text-decoration:none;"><img src="movies/kirik-party.jpg" style="height:200px;width:200px;">
		<h4>KIRIK PARTY</h4>
	</div>
	<div class="box" >
		<a href="movies/ricky/ricky.php" style="text-decoration:none;"><img src="movies/ricky.jpg" style="height:200px;width:200px;">
		<h4>RICKY</h4>
	</div>
	<div class="box" >
		<a href="movies/uturn/uturn.php" style="text-decoration:none;"><img src="movies/u-turn.jpg" style="height:200px;width:200px;">
		<h4>U TURN</h4>
	</div>
	<div class="box" >
		<a href="movies/doddmane-huduga/ddmnhdg.php" style="text-decoration:none;"><img src="movies/doddmane-hudga.jpg" style="height:200px;width:200px;">
		<h4>DODDAMANE HUDUGA</h4>
	</div>
	<div class="box" >
		<a href="movies/uk/uk.php" style="text-decoration:none;"><img src="movies/ulidavar.jpg" style="height:200px;width:200px;">
		<h4>ULIDAVARU KANDANTHE </h4>
	</div>
	<div class="box" >
		<a href="movies/ramachari/ramachari.php" style="text-decoration:none;"><img src="movies/ramachari.jpg" style="height:200px;width:200px;">
		<h4> MR&MRS RAMACHARI</h4>
	</div>
	<div class="box" >
		<a href="movies/rangitharanga/rangitharanga.php" style="text-decoration:none;"><img src="movies/rangitharanga.jpg" style="height:200px;width:200px;">
		<h4>RANGITHARANGA </h4>
	</div>
	<div class="box" >
		<a href="movies/googly/googly.php" style="text-decoration:none;"><img src="movies/googly.jpg" style="height:200px;width:200px;"	>
		<h4> GOOGLY</h4>
	</div>
	
	
</div>

</body>
<script>
	function movie_list()
{
	window.scrollBy(0,250);
	var plot_div1 = document.getElementById("list_bk");
	plot_div1.style.visibility="hidden";
	plot_div1.style.display="none";
	var plot_div = document.getElementById("list_mov");
	plot_div.style.visibility="visible";
	plot_div.style.display="";
	
}	

function book_list()
{
	window.scrollBy(0,250);
	var plot_div = document.getElementById("list_mov");
	plot_div.style.visibility="hidden";
	plot_div.style.display="none";
	var plot_div1 = document.getElementById("list_bk");
	plot_div1.style.visibility="visible";
	plot_div1.style.display="";
}	
</script>

</html>