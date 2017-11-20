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
	<img src="rajakumar.jpg" style="width:100%;height:500px;">
	
	<p align="center" style="font-size: 65px;;font-family: Microsoft Yi Baiti; margin-top: 20px; color: #ff00ff;"><b>"RAJAKUMARA"</b></p>
	
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
<div  id="plot_id"    style="color: #d9d9d9;width:890px;background-color:white;visibility:hidden;position:absolute;left:50px;">
 <input type="checkbox" class="read-more-state" id="post-1" />
   <p class="read-more-wrap" style="color:#007fff;"><br>Siddharth, aka Appu, is the ideal NRI, taking care of his father's business and fighting for his native country's pride. He falls in love with Nandini, a salsa instructor, and all seems to be going great. <br>But, a tragedy brings him back to his roots in India and he uncovers a problem related to his family that he resolves to set right. .<br>
   <span class="read-more-target"><br>Raajkumara is one of the few mass films that has the charm of old-world family entertainers, while still retaining the sass and style related to films today. <br>Santhosh Ananddram delivered one of Sandalwood's biggest hits with his debut and his second film has extravagance and substance that hits the right note. The role is tailormade for Puneeth Rajkumar, blending the right amount of commercial elements. .<br>

The film scores high on technical aspects. The locations are an added bonus. <br>The visual richness, blended with a screenplay that has a good mix of comedy, romance, action and melodrama, ensures one walks out with a good cinematic experience. .<br> The other notable point is the dialogues. They have the necessary zing, without going over the top like how most big hero films do. .<br>
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
	var plot1_div = document.getElementById("plot_id");
	plot1_div.style.visibility="hidden";
	link_div.style.visibility="visible";
	
}	

</script>
</html>
