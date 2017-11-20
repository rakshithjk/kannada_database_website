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

    else{header('Location:login.php');}

	
?> 

<html> 
<head> 
<title>Kannada Database</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
<!--div .qwe{ background-color: white; color:blue; border: solid 2px black; margin: 30px; font-family: Trebuchet MS;}--> 
.qwe{background-color: yellow; color:red; border: solid 2px black; margin: 80px; font-family: Trebuchet MS;text-size:35px;}
.we{text-size:15px;}
</style>
</head> 

<body style="background-color: #f4f4f4;">

<header id="litbg" style="background-image: url(forum/bg1.jpg);
	width:100%;height:500px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;">

<div class="row">
	<div class="logo">
		
			<img src="img/logo.png">
		
	</div>
	<ul class="main-nav"  >
	    <li><a  href="index.html"><span style="color:black;">HOME</span></a></li>
		<li><a  href="movies.php"><span style="color:black;">MOVIES</span></a></li>
		<li><a href="literature.php"><span style="color:black;">LITERATURE</span></a></li>
		<li><a  href="songs.php"><span style="color:black;">SONGS</span></a></li>
		<li><a class="current" href="forum.php"><span style="color:black;">FORUM	</span></a></li>
		<li class="login" id="login" style="color:black;visibility:visible;"><a href="login.php"><span style="color:black;">SIGN-IN/REGISTER</span></a></li>
		<li class="logout" id="logout" style="color:black;visibility:hidden;"><a href="logout.php"><span style="color:black;">LOGOUT</span></a></li>
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
<div>
   <center> <input type="button" value="new post" onclick="location.href = 'forum/topics.php';"  style="background-color:red;padding: 15px 32px;text-align: center;font-size: 16px;" ></center>
</div>

<div>



<?php

include 'connect.php';

 
$sql = "SELECT * FROM categories";
mysqli_query($conn, $sql) or die(mysqli_error($conn));
$result = mysqli_query($conn,$sql);
echo(mysqli_error($conn));
 
if(!$result)
{
    echo 'The categories could not be displayed, please try again later.';
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
        //prepare the table
        echo '<table border="1" style="background-color:lightblue;width:100%;">
              <tr>
                <th>Category</th>
                <th>Description</th>
              </tr>'; 
             
        while($row = mysqli_fetch_assoc($result))
        {               
            echo '<tr>';
                echo '<td class="leftpart">';
                $var_value = $row['cat_id'];
                    echo '<h3><form method="get" action="forum/movies.php"><input type="hidden" name="id" value= '. $var_value . '><input type="submit" value= '. $row['cat_name'] .' style="background-color:red;padding: 15px 32px;text-align: center;font-size: 16px;"></form></h3>';
                           

                echo '</td>';
                echo '<td class="rightpart">';
                           echo '<center><h5>' . $row['cat_description'].'</h5></center> ';
                echo '</td>';            echo '</tr>';
        }
    }
}
 

?>
</div>
</body>
</html>