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
<body >

<header id="litbg" style="background-image: url(songs/bg.jpg);
	width:100%;height:500px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;">

<div class="row">
	<div class="logo">
		
			<img src="img/logo.png">
		
	</div>
	<ul class="main-nav" >
	    <li><a  href="index.php"><span style="color:yellow;background-color:black;padding:2px;margin-left:-5px;border-radius: 10px;">HOME</span></a></li>
		<li><a  class="current" href="movies.php"><span style="color:white;background-color:black;padding:2px;border-radius: 10px;">MOVIES</span></a></li>
		<li><a href="literature.php"><span style="color:#ccff33;background-color:black;padding:2px;border-radius: 10px;">LITERATURE</span></a></li>
		<li><a href="songs.php"><span style="color:red;background-color:black;padding:2px;border-radius: 10px;">SONGS</span></a></li>
		<li><a href="forum.php"><span style="color:lightgreen;background-color:black;padding:2px;border-radius: 10px;">FORUM	</span></a></li>
		<li class="login" id="login" style="color:#ff00ff;visibility:visible;background-color:black;padding:2px;border-radius: 10px;"><a href="login.php"><span style="color:#ff00ff;background-color:black;padding:2px;border-radius: 10px;">SIGN-IN/REGISTER</span></a></li>
		<li class="logout" id="logout" style="color:#ff00ff;visibility:hidden;background-color:black;padding:2px;border-radius: 10px;"><a href="logout.php"><span style="color:#ff00ff;background-color:black;padding:2px;border-radius: 10px;">LOGOUT</span></a></li>
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
		<h1 style="color:blue;margin-top:-170px;"><pre>	<br><br>		Welcome to Music Section</pre></h1> <br><h3 ><pre><span style="color:black;">         ಹಾಡುಗಳ ವಿಭಾಗಕ್ಕೆ ಸುಸ್ವಾಗತ</span></pre></h3>

		</div>
	</div>
</div>
</header>
<div>
	<ul  style="background:linear-gradient(to top, white 10%, purple 90%);height:70px;">
	<br>
    <center>
	<li style="display: inline;"><input type="button" id="plot" value="ಜಾನಪದ  ಗೀತೆಗಳು /  FOLK SONGS" style="visibility:visible;display:inline-block;margin-left: 20px;background-color: #ffbf00;border-radius:20px;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	<li  style="display: inline;"><input type="button" onclick ="song_branch()" id="movie" value="ಚಿತ್ರ ಗೀತೆಗಳು / MOVIE SONGS" style="display:inline-block;margin-left: 20px;background-color: #ffbf00;border-radius:20px;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	</center>
	</ul>
</div>
<div id="movie_drop" style="visibility:hidden;">
	<ul  style="background:linear-gradient(to bottom, white 10%, purple 90%);"><br>
    
	
	<center>
	<li style="display: inline;"><input type="button" id="old" onclick ="old_song_list()" value="ಹಳೆಯ ಗೀತೆಗಳು / OLD SONGS" style="display:inline-block;margin-left: 20px;background-color: #ffbf00;padding:10px;border-radius:20px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	<li  style="display: inline;"><input type="button" onclick ="song_list()" id="new" value="ಹೊಸ ಗೀತೆಗಳು / NEW SONGS" style="display:inline-block;margin-left: 20px;background-color: #ffbf00;border-radius:20px;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	</center>
	</ul>
</div>
<!--   ---------------------------------------------------------old songs------------------------------------------------------------------------------------------------------------ -->

<section id="boxes">
<div class="container" id="list_old_songs" style="visibility:hidden;">
	<p align="center" style="font-size: 35px; font-family: Microsoft Yi Baiti; margin-top: 20px; color: #999;">"LIST OF SONGS-ಹಾಡುಗಳ ಪಟ್ಟಿ"</p>
	<br>
	<hr width="30%" style="color:#ffffff4d; margin-left: 33%;">
	<br>
	
	<br>
	<hr style="color:#ffffff4d;">
	<br>
	<div class="box" style="width:1000px;height:10px;background:linear-gradient(to left, #f4f4f4 0%, lightyellow 100%);height:100px;" >
		<h4 style="float:left;">Baadihoda Balliyinda Hoovu Aralaballade?<br>ಬಾಡಿ ಹೋದ ಬಳ್ಳಿ ಇಂದ</h4>
		<audio id="myAudio1" src="songs/old/baadi.mp3" preload="auto"></audio>
		<a onClick="togglePlay(1)"><button  style="font-size:24px;margin-right:-690px;width:60px;"><img id="b1" src="songs/play.png" style="width:50px;" ></a>	
	</div>
	
	<br><br><br><br>
	<div class="box" style="width:1000px;height:10px;background:linear-gradient(to right, #f4f4f4 0%, lightblue 100%);height:100px;" >
		<h4 style="float:left;">Viraha Nooru Nooru Taraha<br>ವಿರಹ ನೂರು ನೂರು ತರಹ</h4>
	<audio id="myAudio2" src="songs/old/viraha.mp3" preload="auto"></audio>
		<a onClick="togglePlay(2)"><button  style="font-size:24px;margin-right:-820px;width:60px;"><img id="b2" src="songs/play.png" style="width:50px;" ></a>
	</div>
	<br><br><br><br>
	<div class="box" style="width:1000px;height:10px;background:linear-gradient(to left, #f4f4f4 0%, #ff6666 100%);height:100px;">
		<h4 style="float:left;">Banigondu elle el ide<br>ಬಾನಿಗೊಂದು ಎಲ್ಲೆ ಎಲ್ಲಿದೆ</h4>
		<audio id="myAudio3" src="songs/old/baanigondu.mp3" preload="auto"></audio>
		<a onClick="togglePlay(3)"><button style="font-size:24px;margin-right:-850px;width:60px;"><img id="b3" src="songs/play.png" style="width:50px;" ></a>
	</div>
	<br><br><br><br>
	<div class="box" style="width:1000px;height:10px;background:linear-gradient(to right, #f4f4f4 0%, #b3ffb3 100%);height:100px;" >
		<h4 style="float:left;">Bhale Bhale chandada<br>ಭಲೆ ಭಲೆ ಚಂದದ</h4>
		<audio id="myAudio4" src="songs/old/Bhale.mp3" preload="auto"></audio>
		<a onClick="togglePlay(4)"><button  style="font-size:24px;margin-right:-870px;width:60px;"><img id="b4" src="songs/play.png" style="width:50px;" ></a>
	</div>
	<br><br><br><br>
	<div class="box" style="width:1000px;height:10px;background:linear-gradient(to left, #f4f4f4 0%, orange 100%);height:100px;" >
		<h4 style="float:left;">Aadisinodu Beedisinodu<br>ಆಡಿಸಿನೋಡು ಬೀಳಿಸಿನೋಡು</h4>
		<audio id="myAudio5" src="songs/old/aadisinodu.mp3" preload="auto"></audio>
		<a onClick="togglePlay(5)"><button  style="font-size:24px;margin-right:-820px;width:60px;"><img id="b5" src="songs/play.png" style="width:50px;" ></a>
		
	</div>
	<br><br><br><br>
	<div class="box" style="width:1000px;height:10px;background:linear-gradient(to right, #f4f4f4 0%, lightblue 100%);height:100px;">
		<h4 style="float:left;">College Kumar kissige damaar<br>ಕಾಲೇಜ್ ಕುಮಾರ್ ಕಿಸ್ಸಿಗೆ ಡಮಾರ್ </h4>
		<audio id="myAudio6" src="songs/old/college.mp3" preload="auto"></audio>
		<a onClick="togglePlay(6)"><button  style="font-size:24px;margin-right:-760px;width:60px;"><img id="b6" src="songs/play.png" style="width:50px;" ></a>
	</div>
	<br><br><br><br>
	<div class="box" style="width:1000px;height:10px;background:linear-gradient(to left, #f4f4f4 0%, lightyellow 100%);height:100px;">
		<h4 style="float:left;">Naguva Nayana<br>ಬಾನಿಗೊಂದು ಎಲ್ಲೆ ಎಲ್ಲಿದೆ</h4>
		<audio id="myAudio7" src="songs/old/naguva.mp3" preload="auto"></audio>
		<a onClick="togglePlay(7)"><button  style="font-size:24px;margin-right:-850px;width:60px;"><img id="b7" src="songs/play.png" style="width:50px;" ></a>
	</div>
	<br><br><br><br>
	<div class="box" style="width:1000px;height:10px;background:linear-gradient(to right, #f4f4f4 0%, #b3ffb3 100%);height:100px;">
		<h4 style="float:left;">Mammaravello Kogile elo<br>ಮಾಮರವೆಲ್ಲೊ ಕೋಗಿಲೆ ಎಲ್ಲೋ</h4>
		<audio id="myAudio8" src="songs/old/aadisinodu.mp3" preload="auto"></audio>
		<a onClick="togglePlay(8)"><button  style="font-size:24px;margin-right:-790px;width:60px;"><img id="b8" src="songs/play.png" style="width:50px;" ></a>
	</div>
	</section>
	<br><br><br><br>
<!--   ------------------------------------------------------------new songs---------------------------------------------------------------------------------------------------------->
<section id="boxes">
<div class="container" id="list_songs" style="visibility:hidden;">
	<p align="center" style="font-size: 35px; font-family: Microsoft Yi Baiti; margin-top: 20px; color: #999;">"LIST OF SONGS-ಹಾಡುಗಳ ಪಟ್ಟಿ"</p>
	<br>
	<hr width="30%" style="color:#ffffff4d; margin-left: 33%;">
	<br>
	
	<br>
	<hr style="color:#ffffff4d;">
	<br>
	<div class="box" >
		<a href="songs/vishnuvardhana/vishnuvardhana.php"><img src="songs/vishnuvardhana.jpg" style="height:200px;width:200px;"></a>
		<h4>VISHNUVARDHANA</h4>
		<p class="norman" style="color: #666;"></p>
	</div>
	<div class="box">
		<a href="songs/raajkumaara/rajkumaara.php" style="text-decoration:none;"><img src="songs/rajakumara.jpg" style="height:200px;width:200px;"></a>
		<h4>RAJKUMAARA</h4>
		
	</div>
	<div class="box">
		<a href="songs/gbsm/gbsm.php" style="text-decoration:none;"><img src="songs/gbsm.jpg" style="height:200px;width:200px;"></a>
		<h4>GODHI BANNA-SADHARANA MAIKATTU</h4>
		
	</div>
	<div class="box">
		<a href="songs/optnalm/optnalm.php" style="text-decoration:none;"><img src="songs/oprtn-almla.jpg" style="height:200px;width:200px;"></a>
		<h4>OPERATION ALAMELAMMA</h4>
		
	</div>
	<div class="box" >
		<a href="songs/kirik-party/kp.php" style="text-decoration:none;"><img src="songs/kirik-party.jpg" style="height:200px;width:200px;"></a>
		<h4>KIRIK PARTY</h4>
	</div>
	<div class="box" >
		<a href="songs/ricky/ricky.php" style="text-decoration:none;"><img src="songs/ricky.jpg" style="height:200px;width:200px;"></a>
		<h4>RICKY</h4>
	</div>
	<div class="box" >
		<a href="songs/uturn/uturn.php" style="text-decoration:none;"><img src="songs/u-turn.jpg" style="height:200px;width:200px;"></a>
		<h4>U TURN</h4>
	</div>
	<div class="box" >
		<a href="songs/doddmane-huduga/ddmnhdg.php" style="text-decoration:none;"><img src="songs/doddmane-hudga.jpg" style="height:200px;width:200px;"></a>
		<h4>DODDAMANE HUDUGA</h4>
	</div>
	<div class="box" >
		<a href="songs/uk/uk.php" style="text-decoration:none;"><img src="songs/ulidavar.jpg" style="height:200px;width:200px;"></a>
		<h4>ULIDAVARU KANDANTHE </h4>
	</div>
	<div class="box" >
		<a href="songs/ramachari/ramachari.php" style="text-decoration:none;"><img src="songs/ramachari.jpg" style="height:200px;width:200px;"></a>
		<h4> MR&MRS RAMACHARI</h4>
	</div>
	<div class="box" >
		<a href="songs/rangitharanga/rangitharanga.php" style="text-decoration:none;"><img src="songs/rangitharanga.jpg" style="height:200px;width:200px;"></a>
		<h4>RANGITHARANGA </h4>
	</div>
	<div class="box" >
		<a href="songs/googly/googly.php" style="text-decoration:none;"><img src="songs/googly.jpg" style="height:200px;width:200px;"	></a>
		<h4> GOOGLY</h4>
	</div>
	
</div>
</section>

	
<script>
	function song_list()
{	
	
	window.location.hash ='#list_songs';
	
	var plot_div = document.getElementById("list_songs");

	plot_div.style.visibility="visible";
	plot_div.style.display="";
		var plot_div1 = document.getElementById("list_old_songs");
	plot_div1.style.visibility="hidden";
	plot_div1.style.display="none";

	
}	


var myAudio = document.getElementById("myAudio");

function togglePlay() {
  return myAudio.paused ? myAudio.play() : myAudio.pause();
};
	function song_branch()
{
	  window.scrollBy(0,250);
	var plot_div = document.getElementById("movie_drop");
	plot_div.style.visibility="visible";
	//plot_div1.style.display="";
	var plot_div1 = document.getElementById("plot");
	plot_div1.style.visibility="hidden";
	plot_div1.style.display="none";
}	
	function old_song_list()
{
	window.location.hash ='#list_old_songs';

	var plot_div = document.getElementById("list_old_songs");
	plot_div.style.visibility="visible";
	plot_div.style.display="";
	var plot_div1 = document.getElementById("list_songs");

	plot_div1.style.visibility="hidden";
	plot_div1.style.display="none";
}	


function togglePlay(e) {

	var myAudio = document.getElementById("myAudio"+e);

   if(myAudio.paused){
	   
	   var btn = document.getElementById("b"+e);
	   btn.src="songs/pause.png";
	 
	   return myAudio.play()
   }
	else{
		
		var btn = document.getElementById("b"+e);
	   btn.src="songs/play.png";
	   return myAudio.pause();
	}
		};

</script>
</header>