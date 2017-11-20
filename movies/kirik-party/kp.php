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
	<img src="kirikparty.jpg" style="width:100%;height:500px;">
	
	<p align="center" style="font-size: 65px;;font-family: Microsoft Yi Baiti; margin-top: 20px; color: #ff00ff;"><b>"KIRIK PARTY"</b></p>
	
</div>

<br><br>
<div class = "shmr">
  <input type="checkbox" class="read-more-state" id="post-2" />

  <ul  style="background-color:#404040">
    <li style="display: inline;"><input type="button" onclick="plot_func()" id="plot" value="PLOT" style="display:inline-block;margin-left: 20px;background-color: #00cc00;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	<li style="display: inline;"><input type="button" id="plot" value="REVIEW" style="display:inline-block;margin-left: 20px;background-color: #ff0066;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	<li style="display: inline;"><input type="button" onclick="link_func()"  value="LINKS" style="display:inline-block;margin-left: 20px;background-color: #ffbf00;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	
	</ul>
</div>
<br><br>
<div id="link_id" style="visibility:hidden;">
	<br>
	<input type="button" value ="YOUTUBE" style ="display:inline-block;margin-left: 20px;background-color: #b2b300;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
	<input type="button" value ="DAILYMOTION" style ="display:inline-block;margin-left: 20px;background-color: #b2b300;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
	<input type="button" value ="HOTSTAR" style ="display:inline-block;margin-left: 20px;background-color: #b2b300;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">

	</div>
	<br>
<div id="mv_id"  style="visibility:hidden;">
<input type="button"onclick="mvplay()"  value ="PLAY MOVIE" style ="display:inline-block;margin-left: 20px;background-color: lightgreen;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
</div>
<br>
<center>
<div id="mv_pl" style="visibility:hidden;">
<video width="600px" controls>
  <source src="kirikparty.mp4" type="video/mp4">
  
  Your browser does not support HTML5 video.
</video></center>
</div>	
<div  id="plot_id"    style="color: #d9d9d9;width:890px;background-color:white;visibility:hidden;position:absolute;left:50px;">
 <input type="checkbox" class="read-more-state" id="post-1" />
   <p class="read-more-wrap"  style="color:#007fff;">Karna, the college stud in many ways, dabbles with love, friendship, heartache and self-discovery in his extended years in college.<br> These are made memorable by two women, Saanvi, his senior, and Aarya, his junior. <br>

It was the trailer of Kirik Party that got people people excited, given its references to college life, especially for those in engineering institutions. <br> The film has lived up to its expectations and how. One really does not look for a edge-of-the-seat story in films of these genres. <br>This isn't the regular college caper either. <br>Kirik Party, instead, promises an experience to the viewer that leaves them happy, satiated and walking out feeling good, reminiscing about college, friends and love. <br>

   <span class="read-more-target"> The film is about Karna, played by Rakshit. It traces his life through his years in the college. From being the adorable, cheeky first year student to becoming a name that brings fear in all, the film sees varied hues of this student's character and Rakshit does a commendable job. The scene before the interval, which sees a big transformation in Karna's character, lingers in one's mind. <br>

Both the new heroines have added their own quirks to the film. Rashmika Mandanna as Saanvi is easily that pin-up girl in college and she breathes her path.<br> Samyuktha Hegde, on the other hand, as the bubbly Aarya, has a tough act to follow given the peppy first half and impresses by holding her own in crucial scenes. <br>
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
	var link2_div = document.getElementById("mv_pl");
	link2_div.style.visibility="hidden";
	link2_div.style.display="none";
		var link_div1 = document.getElementById("mv_id");
		link_div1.style.visibility="hidden";
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
	plot1_div.style.display="block";	
}
</script>
</html>