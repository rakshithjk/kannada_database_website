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
	<link rel="stylesheet" type="text/css" href="../mvstyle.css">`
	
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
	<img src="alluvellamma.jpg" style="width:100%;height:500px;">
	
	<p align="center" style="font-size: 65px;;font-family: Microsoft Yi Baiti; margin-top: 20px; color: #ff00ff;"><b>"OPERATION ALAMELAMMA"</b></p>
	
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
<!--<div id="mv_id"  style="visibility:hidden;">
<input type="button"onclick="mvplay()" value ="PLAY MOVIE" style ="display:inline-block;margin-left: 20px;background-color: lightgreen;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
</div>
<br>
<center>
<div id="mv_pl" style="visibility:hidden;">
<video width="600px" controls>
  <source src="googly.mkv" type="video/mkv">
  
  Your browser does not support HTML5 video.
</video></center>
</div>	-->
<div  id="plot_id"    style="color: #d9d9d9;width:890px;background-color:white;visibility:hidden;position:absolute;left:50px;">
 <input type="checkbox" class="read-more-state" id="post-1" />
   <p class="read-more-wrap" style="color:#007fff;">Purmy, a vegetable auctioneer, who is engaged to be married to school teacher, is picked up by the police. <br>He has been rounded in as the prime suspect in the kidnap case of a school kid. How does Purmy wriggle out of this mess? .<br>

When one watches a Suni film, what one is assured is innovative dialogues, filled with quirks and laughs, and an offbeat take on something we see daily. <br>Operation Alamelamma also delivers the same. The film, which rides high on its writing and dialogues, is mostly a fun ride for the viewers, <br>where they are often found laughing at the simple, but funny dialogues. .<br>

   <span class="read-more-target">This story, which at heart is a thriller, is also a romcom with some heartwarming scenes. While the film begins in the middle of a kidnap drama, it soon takes a comical twist as we are introduced to the lead pair — Purmy and Ananya. Both of them are street smart and have their own dreams and aspirations.<br> A breezy romcom is what unfolds until we come back to the kidnap drama and its prime suspect Purmy. From there, we see a mix of action, a whodunnit mystery and even sentimental drama. .<br>

The film has a first half that engages and entertains with lots of light moments. The second half, which has a lot of drama unfolding, ends up being a tad slow towards the end, which can get one fidgeting. <br>The film scores high on technical values. Cinematographer Abhishek G Kasargod promises to be an asset to the Kannada film industry, given his work here. Judah Sandhy's songs and background score adds to the narrative. .<br>
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
