<?php

    session_start();
    $sess = 0;
    print_r($_SESSION);
    if(($_SESSION['signed_in'])==true)
    {
            $sess =1;
    }        
?>


<html> 
<head> 
<title>Kannada Database</title>
<link rel="stylesheet" type="text/css" href="../style.css">
<style>
<!--div .qwe{ background-color: white; color:blue; border: solid 2px black; margin: 30px; font-family: Trebuchet MS;}--> 
.qwe{background-color: yellow; color:red; border: solid 2px black; margin: 80px; font-family: Trebuchet MS;text-size:35px;}
.we{text-size:15px;}
</style>
</head> 

<body style="background-color: #f4f4f4;">

<header id="litbg" style="background-image: url(bg.jpg);
    width:100%;height:500px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;">

<div class="row">
    <div class="logo">
        
            <img src="../img/logo.png">
        
    </div>
    <ul class="main-nav"  >
        <li><a  href="../index.php"><span style="color:red;">HOME</span></a></li>
        <li><a  href="../movies.php"><span style="color:red;">MOVIES</span></a></li>
        <li><a href="../literature.php"><span style="color:red;">LITERATURE</span></a></li>
        <li><a  href="../songs.php"><span style="color:red;">SONGS</span></a></li>
        <li><a class="current" href="../forum.php"><span style="color:red;">FORUM  </span></a></li>
        <li class="login" id="login" style="color:red;visibility:visible;"><a href="../login.php"><span style="color:red;">SIGN-IN/REGISTER</span></a></li>
        <li class="logout" id="logout" style="color:red;visibility:hidden;"><a href="../logout.php"><span style="color:red;">LOGOUT</span></a></li>
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



<?php $var_value = $_GET['id']; ?>
<br><br>
<h6>type reply here</h6>
<form method="post" action="reply.php">
	<input type="hidden" name="id" value="<?php print $var_value ?>">
    <textarea name="reply-content" style="height:100px;width:800px;margin-left: 10px;background-color:white;color:black;  "></textarea><br>
    <input type="submit" style="background-color:#b32d00;color:white;padding:10px;margin-left: 10px;" value="Submit reply" />
</form>
</body>
</html>