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
	<img src="uturn.jpg" style="width:100%;height:500px;">
	
	<p align="center" style="font-size: 65px;;font-family: Microsoft Yi Baiti; margin-top: 20px; color: #ff00ff;"><b>"U Turn"</b></p>
	
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
<div id="link_id" style="visibility:hidden;">
	<br>
	<input type="button" value ="YOUTUBE" style ="display:inline-block;margin-left: 20px;background-color: #b2b300;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
	<input type="button" value ="DAILYMOTION" style ="display:inline-block;margin-left: 20px;background-color: #b2b300;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
	<input type="button" value ="HOTSTAR" style ="display:inline-block;margin-left: 20px;background-color: #b2b300;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">

	</div>
<div  id="plot_id"    style="color: #d9d9d9;width:890px;background-color:white;visibility:hidden;position:absolute;left:50px;">
 <input type="checkbox" class="read-more-state" id="post-1" />
   <p class="read-more-wrap" style="color:#007fff;">The story follows the life of rebellious Rachana, who is an intern reporter, aspiringtesy the story she is following for the paper. Revealing anything extra would be unfair to this well-knit screenplay and story that Pawan has woven
   <span class="read-more-target" > <br>This film is a definite must watch for Bengalureans, as that flyover in the Central Business District and the disrupted divider on it with Baadal Nanjundaswamy's art work is something we all know about.<br> The film can also be read on philosophical and symbolic levels with leitmotifs and what not, but the triumph is that it even appeals to the lay viewer who seeks thrill and entertainment and nothing more.

<br>What impresses is the cinematography, editing and the brisk screenplay, and not to forget Poornachandra Tejaswi's background score.<br> While some can try and make some guesses, Pawan has a clever storyline indeed, with a hard-hitting message.

<br>The casting is one of the biggest plus points of the film. Shraddha Srinath is a good find and she is a talent to look out for in the future. Similarly, Roger Narayan as the empathetic and sharp cop is another new talent to applaud. <br>Radhika Chetan, Dileep Raj and Skanda Ashok deliver just want they were asked for, as do the rest of the cast members.

<br>The film has some good subtitling that works for the non-Sandalwood audience too. Go take this U-Turn to the cinema hall, Pawan proves why he is sought after globally as one of the young, intelligent minds to talk about the changing face of cinema
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
