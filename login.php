
<html>
<head>
<meta charset="utf-8">
<title>KANNADA DATABASE</title>

<style type="text/css">
body {
background-color: #f4f4f4;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

/* ---------- LOGIN ---------- */
#login {
margin: 50px auto;
width: 300px;
}
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
}
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 10px;
}
form fieldset a:hover { text-decoration: underline; }
.btn-round {
background-color: #5a5656;
border-radius: 50%;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
color: #f4f4f4;
display: block;
font-size: 12px;
height: 50px;
line-height: 50px;
margin: 30px 125px;
text-align: center;
text-transform: uppercase;
width: 50px;
}

.twitter-before {
background-color: #189bcb;
border-radius: 3px 0px 0px 3px;
-moz-border-radius: 3px 0px 0px 3px;
-webkit-border-radius: 3px 0px 0px 3px;
color: #f4f4f4;
display: block;
float: left;
height: 50px;
line-height: 50px;
text-align: center;
width: 50px;
}
.twitter {
background-color: #1bb2e9;
border: none;
border-radius: 0px 3px 3px 0px;
-moz-border-radius: 0px 3px 3px 0px;
-webkit-border-radius: 0px 3px 3px 0px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 250px;
display:inline;
}
.main-nav li{
	display: inline-block;
	margin-left: 20px;

}
.main-nav li a{
	color: white;
	text-decoration: none;
	font-size: 90%;
	font-weight: bold;
}
.main-nav li a:hover{
	color: black;
	border-bottom: 2px solid #e67e22;
	transition: all 0.5s ease-in;
	padding: 15px 0;
}
.current{
	border-bottom: 3px solid #e67e22;
}
.main-nav li a:hover{
	color: #e67e22;
	border-bottom: 2px solid #e67e22;
	transition: all 0.5s ease-in;
	padding: 10px 0;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
}
</style>
</head>
<body style="background-color:#f4f4f4;">
<img src="img/logo.png" style="height: 250px;
	float: left;
	
	margin-top: 20px;">
<div style="background: linear-gradient(to bottom, #ff3300 0%, #ffff00 100%);height:100px;">
<br>
	<ul class="main-nav" >
	     <li><a  href="index.php"><span style="color:black;font-size:20px;">HOME</span></a></li>
		<li><a   href="movies.php"><span style="color:black;font-size:20px;">MOVIES</span></a></li>
		<li><a href="literature.php"><span style="color:black;font-size:20px;">LITERATURE</span></a></li>
		<li><a href="songs.php"><span style="color:black;font-size:20px;">SONGS</span></a></li>
		<li><a href="forum.php"><span style="color:black;font-size:20px;">FORUM	</span></a></li>
		<li><a class="current" href="login.php"><span style="color:black;font-size:20px;">SIGN-IN/LOGIN</span></a></li>
	</ul>
</div>
<div id="login">
<h1><strong>Welcome.</strong> Please login.</h1>

<form name="frmRegistration" method="post" action="login_vl.php">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>

<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td><span style="color:red;">*</span>marked fields are mandatory</td>
</tr>
<tr>
<td>User Name<span style="color:red;">*</span></td>
<td><input type="text" class="demoInputBox" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>"></td>
</tr>

<tr>	
<td>Password<span style="color:red;">*</span></td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>
<tr>
<td><input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>

<p>
<a class="twitter-before"></a>
<a href="register.php"><button class="twitter">New user?....REGISTER</button></a>

</div>
</body>
</html>