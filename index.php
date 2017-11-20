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

<header id="index">

<div class="row">
	<div class="logo">
		
			<img src="img/logo.png">
		
	</div>
	<ul class="main-nav" style="margin-top:30px;" >
	     <li><a class="current" href="index.php"><span style="color:#00cc00;">HOME</span></a></li>
		<li><a   href="movies.php"><span style="color:violet;">MOVIES</span></a></li>
		<li><a href="literature.php"><span style="color:black;">LITERATURE</span></a></li>
		<li><a href="songs.php"><span style="color:red;">SONGS</span></a></li>
		<li><a href="forum.php"><span style="color:blue;">FORUM	</span></a></li>
		<li class="login" id="login" style="color:#990000;visibility:visible;"><a href="login.php"><span style="color:#990000;">SIGN-IN/REGISTER</span></a></li>
		<li class="logout" id="logout" style="color:#990000;visibility:hidden;"><a href="logout.php"><span style="color:#990000;">LOGOUT</span></a></li>
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
		<h1><pre>			Welcome to kannada database</pre></h1> <br><h3 ><pre><span style="color:orange;">		ಸುಸ್ವಾಗತ</span></pre></h3>

		</div>
	</div>
	

</header>
<section id="boxes">
<div class="container">
	<p align="center" style="font-size: 35px; font-family: Microsoft Yi Baiti; margin-top: 20px; color: #999;">"ONE STOP DESTINATION FOR KANNADA RELATED NEWS AND ENTERTAINMENT ANYTIME-ANYWHERE"</p>
	<br>
	<hr width="30%" style="color:#ffffff4d; margin-left: 33%;">
	<br>
	<div style="text-align: center; color: #999; font-family: Bodoni MT Poster Compressed;">
	
	<p class="maama">KEY FEATURES</p>
	</div>
	<br>
	<hr style="color:#ffffff4d;">
	<br>
	<div class="box">
		<img src="img/upto.png">
		<h4>ACCESIBLE THROUGH ALL DEVICES</h4>
		<p class="norman" style="color: #666;">Never miss your favourite shows again.
		Our subscription plans include upto 365
		days/year premium access. You can also
		choose from various other plans based on your needs.</p>
	</div>
	<div class="box">
		<img src="img/ready.png">
		<h4>KANNADA FORUM</h4>
		<p class="norman" style="color: #666;"> Here you canpost anything you like, give suggestions,complaints,ask questions,anything you want :) which will be answered by other members/admins.</p>
	</div>
	<div class="box">
		<img src="img/shop.png">
		<h4>VIEW ANYWHERE-ANYTIME</h4>
		<p class="norman" style="color: #666;">We don't limit your resouces which means that you can view whenever you feel like.Choose between any device,anywhere,anytime . It's up to you!</p>
	</div>
</div>
</section>
	<section id="boxes">
	<br>
	<div>
	<hr style="color:#ffffff4d;">
	<p align="center" style="font-size: 35px; font-family: Microsoft Yi Baiti; margin-top:0px; color: #e67e22;">GALLERY</p>
	</div>
<div class="container">
	<br>
	<div class="box2">
		<img src="img/gallery/a.jpg" style="height:290px;">
		<h4>................</h4>
		<p style="color: #666;">..................
		</p>
	</div>
	<div class="box2">
		<img src="img/gallery/b.jpg" style="height:290px;">
		<h4>................</h4>
		<p style="color: #666;">..................
		</p>
	</div>
	<div class="box2">
		<img src="img/gallery/c.jpg" style="height:290px;">
		<h4>................</h4>
		<p style="color: #666;">..................
		</p>
	</div>
</div>
</section>
<section id="boxes" style="height:600px;">
	<br>
	<div>
	<hr style="color:#ffffff4d;">
	<p align="center" style="font-size: 35px; font-family: Microsoft Yi Baiti; margin-top:0px; color: #e67e22;">HOW IT WORKS - SIMPLE AS 1,2,3</p>
	</div>
<div class="container">
	<br>
	<div class="box3">
		<a href="https://play.google.com/store/search?q=kannad%20database&c=apps&hl=en"><img src="img/mid.png" style="width: 600px;height:600px;"></a>
	</div>
	<div class="box3">
	</div>
	<div class="box3">
		<div style="color: #666;">
		<p class="norman" style="color: #e67e22;"> 1.</p>
		<p class="norman">Login to the website with your username and password......(Sign up if you don't have an account)</p>
		<p class="norman" style="color: #e67e22;"> 2.</p>
		<p class="norman">Choose your plan as per your need </p>
		<p class="norman" style="color: #e67e22;">3.</p>
		<p class="norman"> enjoy !!!!</p>
		</div>
	</div>
</div>
<hr style="color:#ffffff4d;">
<br>
</section>
<section  id="boxes" style="height:800px;background-image: url(img/3.jpeg);background-repeat: no-repeat;background-position: center;background-size: cover;"  >

	
	
<div class="container">
	<br>
	<div class="box3">
		<p style="font-family: Microsoft Yi Baiti; color:#ffffff; font-size: 35px;">FOLLOW US</p>
		<td>
		<a target="_blank" href="https://facebook.com/rakshithjk">	
		<img src="img/socials/fb.png" width="20px" height="20px" style="margin-right: 20px; cursor: pointer;">
		</a>
		</td>

		<td>
		<a target="_blank" href="https://twitter.com/rakshithjk">
		<img style="margin-right: 20px; cursor: pointer;" src="img/socials/twitter.png" width="25px">
		</a>
		</td>

		<td>
		<a target="_blank" href="https://youtube.com/rakshithjk">
		<img style="margin-right: 20px; cursor: pointer;" src="img/socials/youtube.png" width="20px">
		</a>
		</td>
	</div>
		<div class="box3">
		
		
	</div>

	<div class="box3">
		<p style="font-family: Microsoft Yi Baiti; color:yellow; font-size: 35px;">CONTACT US</p>
			<form action="#" method="post">
			<label>Name:</label><br>
			<input class="input" type="text" name="fname" placeholder="Type Your Full Name"><br>
			<label>Email:</label><br>
			<input class="input" type="email" name="mail" placeholder="Type Your Email"><br>
			<label style="color:white;">How did you find us?</label><br>
			<select name="dropdown" class="input">
				<option value="Friends" selected>Friends</option>
				<option value="Internet">Internet</option>
				<option value="socialmedia">Socialmedia</option>
			</select>
			<br>
			<label>Message:</label><br>
			<textarea class="input" placeholder="Your Message Here"></textarea>
			<br>
			<input type="submit" name="sub" value="Send it" class="_button">
	</form>
		
	</div>
	
		
</section>
<footer>
<p>KANNADA Database (U) Copyright &copy 2017  <a target="_blank" class="btn-full" href="https://facebook.com/rakshithjk">PESU</a></p>
</footer>
</body>
</html>