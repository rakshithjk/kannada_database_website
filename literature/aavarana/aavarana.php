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
<body style="background-color:#f4f4f4;">

<header id="moviebg">

<div class="row">
	<div class="logo" >
		
			<img src="..\..\img\logo.png" style="margin-top:	0px;">
		
	</div>
<div style="background: linear-gradient(to bottom, #ff3300 0%, #ffff00 100%);height:100px;margin-left:-200px;margin-right:-130px;">
	<ul class="main-nav" style="margin-top:	30px;" >
	     <li><a  href="../../index.php"><span style="color:black;font-size:20px;">HOME</span></a></li>
		<li><a   href="../../movies.php"><span style="color:black;font-size:20px;">MOVIES</span></a></li>
		<li><a href="../../literature.php"><span style="color:black;font-size:20px;">LITERATURE</span></a></li>
		<li><a href="../../songs.php"><span style="color:black;font-size:20px;">SONGS</span></a></li>
		<li><a href="../../forum.php"><span style="color:black;font-size:20px;">FORUM	</span></a></li>
		<li class="login" id="login" style="color:red;visibility:visible;"><a href="../login.php"><span style="color:black;font-size:20px;">SIGN-IN/REGISTER</span></a></li>
		<li class="logout" id="logout" style="color:red;visibility:hidden;"><a href="../logout.php"><span style="color:black;font-size:20px;">LOGOUT</span></a></li>
		<li></li>
		<li></li>
	</ul>
</div>

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
	<img src="aavarana.jpg" style="height:300px; float:left;">
	
	<p align="center" style="font-size: 35px; font-family: Microsoft Yi Baiti; margin-top: 20px;float:left; color: #999;">"ಆವರಣ [Aavarana]<br>
by S.L. Bhyrappa"</p>
	
</div>


<div class = "shmr">
  <input type="checkbox" class="read-more-state" id="post-2" />

  <ul  style="background-color:white">
    <li style="display: inline;"><input type="button" onclick="plot_func()" id="plot" value="ABOUT" style="display:inline-block;margin-left: 20px;background-color: red;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	<li style="display: inline;"><input type="button" id="plot" value="REVIEW" style="display:inline-block;margin-left: 20px;background-color: red;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	<li style="display: inline;"><input type="button" onclick="link_func()"  value="LINKS" style="display:inline-block;margin-left: 20px;background-color: red;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;"></li>
	
	</ul>
</div>
<div id="link_id" style="visibility:hidden;">
	<br>
	<input type="button" value ="AMAZON" style ="display:inline-block;margin-left: 20px;background-color: yellow;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
	<input type="button" value ="FLIPKART" style ="display:inline-block;margin-left: 20px;background-color: yellow;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">
	<input type="button" value ="GOODREADS" style ="display:inline-block;margin-left: 20px;background-color: yellow;padding:10px;text-decoration: none;font-size: 90%;font-weight: bold;">

	</div>
<div  id="plot_id"    style="color: #666;width:890px;background-color:white;visibility:hidden;position:absolute;left:50px;">
 <input type="checkbox" class="read-more-state" id="post-1" />
   <p class="read-more-wrap">
ಆವರಣ ಒಂದು ಶ್ರೇಷ್ಠ ಕಾದಂಬರಿಗಳ ಎಸ್ಎಲ್ಎಲ್ ಒಂದು 2007 ಕನ್ನಡ ಕಾದಂಬರಿ. ಭೈರಪ್ಪ. Aavarana ಏನಾದರೂ ಆವರಿಸುವುದು ಅಥವಾ ಒಳಗೊಂಡ ಅರ್ಥ. ಭಾರತದ ಇತಿಹಾಸದಲ್ಲಿ ಮೊಗಲ್ ಚಕ್ರವರ್ತಿ ಔರಂಗಜೇಬ್ ಆಳ್ವಿಕೆಯ ಕಾಲದಲ್ಲಿ ಈ ಕಾದಂಬರಿಯು ಐತಿಹಾಸಿಕ ಅವಧಿಗೆ ಸಂಬಂಧಿಸಿದೆ.
ಫೆಬ್ರವರಿ 2007 ರಲ್ಲಿ ಬಿಡುಗಡೆಯ ಮುಂಚೆಯೇ ಆವರಾನವನ್ನು ಮಾರಲಾಯಿತು. ಈ ಬಿಡುಗಡೆಯ ಐದು ತಿಂಗಳೊಳಗೆ 10 ಮರುಮುದ್ರಣಗಳನ್ನು ವೀಕ್ಷಿಸುವ ಮೂಲಕ ಭಾರತೀಯ ಸಾಹಿತ್ಯಿಕ ಜಗತ್ತಿನಲ್ಲಿ ಈ ದಾಖಲೆಯನ್ನು ರಚಿಸಲಾಗಿದೆ. ಎಸ್.ಎಲ್.ಭೈರಪ್ಪ ಅವರು ಇತಿಹಾಸದ ಬಗ್ಗೆ ಸತ್ಯಕ್ಕಾಗಿ ಅವರ ಹುಡುಕಾಟದ ಫಲಿತಾಂಶ 'ಆವರನಾ' ಎಂದು ಹೇಳುತ್ತಾರೆ.<br>
<span style="font-weight:bold;">translation:</span><br>
   
<span class="read-more-target">   
Aavarana (Kannada: ಆವರಣ) is a 2007 Kannada novel by one of the eminent novelists S.L. Bhyrappa. Aavarana means enveloping or covering something. This novel deals with the historical period in Indian history when the Mogul Emperor Aurangzeb ruled most part of India. 
<br>


Aavarana was sold out even before its release in February 2007. The novel went on to create a record in the Indian literary world by witnessing 10 reprints within five months of its release. 

S.L.Bhyrappa says that 'Aavarana' is the result of his search for truth about history.
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
