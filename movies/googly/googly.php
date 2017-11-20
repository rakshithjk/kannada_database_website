<?php
	session_start();
	$sess = 0;
	print_r($_SESSION);
	if(($_SESSION['signed_in'])==true)
	{
			$sess =1;
			
	}
	
?> 

<!DOCTYPE html>
<html>
<head>
	
	<title>Kannada Database</title>
	<link rel="stylesheet" type="text/css" href="../mvstyle.css">
</head>
<body style="background-color:#404040;">

<header id="moviebg">

<div class="row">
	<div class="logo">
		
			<img src="..\..\img\logo.png">
		
	</div>
	<ul class="main-nav" >
	    <li><a  href="../../index.php"><span style="color:yellow;">HOME</span></a></li>
		<li><a  class="current" href="../../movies.php"><span style="color:white;">MOVIES</span></a></li>
		<li><a href="../../literature.php"><span style="color:#ccff33;">LITERATURE</span></a></li>
		<li><a href="../../songs.php"><span style="color:red;">SONGS</span></a></li>
		<li><a href="../../forum.php"><span style="color:lightgreen;">FORUM	</span></a></li>
		<li class="login" id="login" style="color:#ff00ff;visibility:visible;"><a href="../../login.php"><span style="color:#ff00ff;">SIGN-IN/REGISTER</span></a></li>
		<li class="logout" id="logout" style="color:#ff00ff;visibility:hidden;"><a href="../../logout.php"><span style="color:#ff00ff;">LOGOUT</span></a></li>
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

</header>
<div class="container">
	<br>
	<img src="googly.jpg" style="width:100%;height:500px;">
	
	<p align="center" style="font-size: 65px;;font-family: Microsoft Yi Baiti; margin-top: 20px; color: #ff00ff;"><b>"GOOGLY"</b></p>
	
</div>

<br><br>
<div class = "shmr">
  <input type="checkbox" class="read-more-state" id="post-2" />

  <ul  style="background-color:#404040">
    <li style="display: inline;"><input type="button" onclick="plot_func()" id="plot" value="PLOT" style="display:inline-block;margin-left: 20px;background-color: #00cc00;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	<li style="display: inline;"><input type="button" id="plot" value="REVIEW" style="display:inline-block;margin-left: 20px;background-color: #ff0066;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	<li style="display: inline;"><input type="button" onclick="link_func()"  value="LINKS" style="display:inline-block;margin-left: 20px;background-color: #ffbf00;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	
	</ul>
</div><br><br>
<div id="link_id" style="visibility:hidden;">
	<br>
	<input type="button" value ="YOUTUBE" style ="display:inline-block;margin-left: 20px;background-color: #b2b300;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
	<input type="button" value ="DAILYMOTION" style ="display:inline-block;margin-left: 20px;background-color: #b2b300;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
	<input type="button" value ="HOTSTAR" style ="display:inline-block;margin-left: 20px;background-color: #b2b300;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">

	</div>
<br>
<div id="mv_id"  style="visibility:hidden;">
<input type="button"onclick="mvplay()" value ="PLAY MOVIE" style ="display:inline-block;margin-left: 20px;background-color: lightgreen;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
</div>
<br>
<center>
<div id="mv_pl" style="visibility:hidden;">
<video width="600px" controls>
  <source src="googly.mkv" type="video/mkv">
  
  Your browser does not support HTML5 video.
</video></center>
</div>	
	
<div  id="plot_id"    style="color: #d9d9d9;width:890px;background-color:white;visibility:hidden;position:absolute;left:50px;">
 <input type="checkbox" class="read-more-state" id="post-1" />
   <p class="read-more-wrap"  style="color:#007fff;">The story does not move at times with the sequences testing your patience. Perhaps, Pavan could have thought of trimming the movie by at least 15 minutes. The story is focused on Sharath (Yash), an entrepreneur, who leads a jolly life without caring for anyone. He also has his reservations about falling in love and is careful about it. .<br> But Swathi (Kriti Kharabanda), a medical student, meets him at the World Economic Forum and the duo start loving each other. The story takes a curious turn when Sharath finds Swathi with Sandeep and slaps him. This enrages Swathi who chooses to end her friendship with Sharath. She also makes a call to Sharath stating that she is engaged to another boy. But Sharath is not able to forget Swathi.
   
   <span class="read-more-target">.<br> He meets her at a friend's wedding and the story takes serious twists with excellent sentimental sequences. .<br>

Full marks to Yash for his lively performance as Sharath, especially in the sentimental sequences.<br> Kriti Kharabanda has given life to her character. Music director Joshua Sridhar has some catchy tunes for you. Vaidi has done an excellent work with his camera.
 </span></p>
<label for="post-1" class="read-more-trigger" style="width:500px;background: linear-gradient(to bottom, #ff3300 0%, #ffff00 100%);;font-family: 'Times New Roman', Times, serif;font-size:20px;"></label>
</div>
</body>
<script>

function plot_func()
{
	var plot_div = document.getElementById("plot_id");
	var link1_div = document.getElementById("link_id");
	link1_div.style.visibility="hidden";
	plot_div.style.visibility="visible";
}	
function link_func()
{
	var link_div = document.getElementById("link_id");
	var link_div1 = document.getElementById("mv_id");
	var plot1_div = document.getElementById("plot_id");
	plot1_div.style.visibility="hidden";
	link_div.style.visibility="visible";
	link_div1.style.visibility="visible";
	
}	
function mvplay()
{

	
	var plot1_div = document.getElementById("mv_pl");
	plot1_div.style.visibility="visible";
	
	
}	

</script>
</html>
