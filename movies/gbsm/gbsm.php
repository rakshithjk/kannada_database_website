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
	<img src="godibanna.jpg" style="width:100%;height:500px;">
	
	<p align="center" style="font-size: 65px;;font-family: Microsoft Yi Baiti; margin-top: 20px; color: #ff00ff;"><b>"GODIBANNA SADARANA MAIKATU"</b></p>
	
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
	<a href="http://www.youtube.com/in"><img src="../unnamed.png" height="80px" width="80px"  style="margin-right: 40 px;"></a>
	<a href="http://www.hotstar.com/in"><img src="../hotstar.jpg" height="60px" width="60px" style="margin-right: 20px;margin-left: 20px;"></a>
	<a href="http://www.dailymotion.com/in"><img src="../dailymotion.png" height="60px" width="60px"></a>
	
	</div>
	<br>
<!--<div id="mv_id"  style="visibility:hidden;">
<input type="button"onclick="mvplay()" value ="PLAY MOVIE" style ="display:inline-block;margin-left: 20px;background-color: lightgreen;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
</div>-->
<br>
<center>
<div id="mv_pl" style="visibility:hidden;">
<video width="600px" controls>
  <source src="godi.mp4" type="video/mp4">
  
  Your browser does not support HTML5 video.
</video></center>
</div>
<div  id="plot_id"    style="color: #d9d9d9;width:890px;background-color:white;visibility:hidden;position:absolute;left:50px;">
 <input type="checkbox" class="read-more-state" id="post-1" />
   <p class="read-more-wrap"  style="color:#007fff;">Venkob Rao, an Alzheimer's patient living in an old-age home in Bengaluru, goes missing after a day out with Shiva, his son. Shiva, a workaholic, and Dr Sahana, the psychiatrist taking care of Venkob, search for him. Meanwhile, Venkob lands himself in the middle of a murder scene and his life is at stake.<br>

<br>What do you get when you mix the bittersweet emotional content of Hrishikesh Mukherjee films along with the dark gritty narrative of Anurag Kashyap films?<br> You'll get your answer when you watch Hemanth M Rao's directorial debut effort Godhi Banna Sadharna Mykattu. This film is all heart, with an impressive story line complemented with performances that truly leave a mark. .<br>

   
   <span class="read-more-target"> When the makers released the first teaser and subsequently the much-spoken-about trailer of this film, everyone seemed to have thought that they knew everything about the film. But, Hemanth has only revealed the tip of the iceberg. A dialogue in the trailer sums up the crux of Hemanth's story in the best way, where Venkob Rao says that there reside two dogs in each of us, one black and one white,<br> the question is which one of them wins. In his own own comic philosophical style, Venkob says the answer is the one that we feed more biscuits to.
<br>While there is a tense father-son relationship on one side, there is a gangster going through an existential crisis on another.<br> And in the middle of these two plots, there is a subtle love story too. The way these three parts of the film flow seamlessly and none of these are neglected in favour of the other is one of the truest triumph for debutant Hemanth in this film.
<br>The film also belongs as much to music director Charan Raj and cinematographer .<br>Nandhakishore Neelakanta Rao, as it does to director Hemanth. Charan's music really does take the narrative forward and you wish that some of the background score too was released along with already popular soundtrack. One cannot but go out of the cinema hall humming the tunes from the film.<br> Nandhakishore's cinematography, which is experimental at times, adds to the emotional quotient of the film. .<br>
When it comes to the performances, what impresses about this film is that everyone has done a good job. Anant Nag, of course, steals the show as the affable, funny old man suffering from Alzheimer's. This film does justice to the actor's talent and gives him a role that can be spoken at par with the likes of Amitabh Bachchan in Piku, for instance. Vasishta N Simha, as the gangster, is the other stand-out performer. His voice, emotions and mannerisms are right on cue.
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
