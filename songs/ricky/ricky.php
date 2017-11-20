<?php
	session_start();
	$sess = 0;
	print_r($_SESSION);
	if(isset($_SESSION['username']))
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
	    <li><a  href="index.php"><span style="color:yellow;">HOME</span></a></li>
		<li><a  href="movies.php"><span style="color:white;">MOVIES</span></a></li>
		<li><a href="literature.php"><span style="color:#ccff33;">LITERATURE</span></a></li>
		<li><a  class="current"  href="songs.php"><span style="color:red;">SONGS</span></a></li>
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

</header>
<div class="container">
	<br>
	<img src="ricky.jpg" style="width:100%;height:500px;">
	
	<p align="center" style="font-size: 65px;;font-family: Microsoft Yi Baiti; margin-top: 20px; color: #ff00ff;"><b>"RICKY"</b></p>
	
</div>


<div>
	<ul style="font-size: 30px;margin-left: 100px; font-family: Microsoft Yi Baiti; margin-top: 20px; color: #ff8000 ;">
		<li>O Baby</li>
		<li>Jeeva Neenu</li>
		<li>Harusha Taaladhe</li>
		<li>Malage Malage</li>
		<li>Yele Mareyali</li>
</ul>
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
